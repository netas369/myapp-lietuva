<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class MyProfile extends Component
{
    use WithFileUploads;

    public $user;
    public $name;
    public $lastname;
    public $email;
    public $birthday;
    public $city;
    public $address;
    public $post_code;
    public $phone;
    public $userCategories = [];
    public $slaptazodis;
    public $slaptazodis_confirmation;
    public $aboutMe;
    public $image;
    public $gender;
    public $languages = [];
    public $selectedLanguage = '';


    public function render()
    {
        return view('livewire.my-profile');
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->lastname = $this->user->lastname;
        $this->email = $this->user->email;
        $this->birthday = $this->user->birthday;
        $this->city = $this->user->city;
        $this->address = $this->user->address;
        $this->aboutMe = $this->user->aboutme;
        $this->post_code = $this->user->postal_code;
        $this->phone = substr($this->user->phone, 4);
        // Retrieve the associated categories for the user
        $this->userCategories = $this->user->categories;
        $this->gender = $this->user->gender;
        if ($this->user->languages) {
            $this->languages = json_decode($this->user->languages, true) ?? [];
        }
    }

    public function getValidationRules()
    {
        $minBirthDate = Carbon::now()->subYears(14)->format('Y-m-d');

        return [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthday' => ['required', 'date', 'before_or_equal:' . $minBirthDate],
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'post_code' => 'required|string|max:6',
            'phone' => 'required|string|regex:/^6[0-9]{7}$/',
            'aboutMe' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Specify allowed image types
            'gender' => 'required',
            'languages' => 'required|array|min:1',
            ];
    }



    public function messages()
    {
        return [
            // General rules
            'required' => 'Laukas :attribute yra privalomas.',
            'string' => 'Laukas :attribute turi būti tekstinis.',
            'max' => 'Laukas :attribute negali būti ilgesnis nei :max simbolių.',
            'email' => 'Laukas :attribute turi būti teisingo el. pašto formato.',
            'date' => 'Laukas :attribute turi būti teisingos datos formato.',
            'min' => 'Laukas :attribute turi būti bent :min simbolių ilgio.',
            'confirmed' => 'Laukas :attribute patvirtinimas nesutampa.',
            'unique' => 'Toks :attribute jau užregistruotas.',
            'regex' => 'Laukas :attribute neatitinka reikalaujamo formato.',
            'size' => 'Laukas :attribute turi būti :size simbolių ilgio.',
            // Custom rules
            'gimimo_data.before_or_equal' => 'Jūs turite būti bent 14 metų.',
            'phone.regex' => 'Telefono numeris turi prasidėti skaitmeniu 6 ir būti 8 skaitmenų ilgio.',
            'phone.size' => 'Telefono numeris turi būti 8 skaitmenų ilgio.',
            // Field-specific overrides
            'vardas.required' => 'Vardas yra privalomas.',
            'pavarde.required' => 'Pavardė yra privaloma.',
            'gimimo_data.required' => 'Gimimo data yra privaloma.',
            'email.required' => 'El. paštas yra privalomas.',
            'miestas.required' => 'Miestas yra privalomas.',
            'adresas.required' => 'Adresas yra privalomas.',
            'slaptazodis.required' => 'Slaptažodis yra privalomas.',
            'slaptazodis_confirmation.required' => 'Slaptažodžio patvirtinimas yra privalomas.',
            'selectedCategories.required' => 'Privaloma pasirinkti bent vieną kategoriją',
            'selectedCategories.min' => 'Privaloma pasirinkti bent vieną kategoriją',
            'image.image' => 'Failas privalo būti nuotrauka.',
            'image.mimes' => 'Nuotraukos failas privalo būti: jpeg, png, jpg, gif.',
            'image.max' => 'Nuotrauka negali viršyti 2mb dydžio.',
            'phone.required' => 'Telefono numeris yra privalomas.',
            'post_code.required' => 'Pašto kodas yra privalomas',


        ];
    }

    public function validationAttributes()
    {
        return [
            'name' => 'vardas',
            'lastname' => 'pavardė',
            'birthday' => 'gimimo data',
            'email' => 'el. paštas',
            'city' => 'miestas',
            'address' => 'adresas',
            'password' => 'slaptažodis',
            'slaptazodis_confirmation' => 'slaptažodžio patvirtinimas'
        ];
    }

    public function update()
    {
        $this->validate($this->getValidationRules());

        $this->user->name = $this->name;
        $this->user->lastname = $this->lastname;
        $this->user->birthday = $this->birthday;
        $this->user->email = $this->email;
        $this->user->city = $this->city;
        $this->user->address = $this->address;
        $this->user->aboutme = $this->aboutMe;
        $this->user->postal_code = $this->post_code;
        $this->user->phone = '+370' . $this->phone;
        $this->user->gender = $this->gender;
        $this->user->languages = json_encode($this->languages);


        // Check if the password is being updated for later when will be option to update it
        if ($this->slaptazodis) {
            $this->user->password = bcrypt($this->slaptazodis); // Hash the password
        }

        if ($this->image) {
            // Delete old image if exists
            if ($this->user->image) {
                Storage::disk('public')->delete($this->user->image);
            }

            $filename = $this->image->store('profile-photos', 'public');
            $this->user->image = $filename;
        }

        $this->user->save();


        // Optionally, you can redirect or show a success message
        session()->flash('message', 'Informacija sėkmingai atnaujinta');
        return redirect()->route('myprofile'); // Adjust the route as necessary

    }

    public function addLanguage()
    {
        if (!empty($this->selectedLanguage) && !in_array($this->selectedLanguage, $this->languages)) {
            $this->languages[] = $this->selectedLanguage;
            $this->selectedLanguage = ''; // Reset selection
        }
    }

    public function removeLanguage($language)
    {
        $this->languages = array_values(array_filter($this->languages, function($lang) use ($language) {
            return $lang !== $language;
        }));
    }
}
