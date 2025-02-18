<nav class="relative px-4 py-4 flex justify-between items-center bg-white border-b border-gray-200 shadow-md shadow-primary-light/50">
    <a class="text-3xl font-bold leading-none" href="/">
        <p class="text-primary-light font-bold sm:text-3xl text-2xl">WORK<span class="text-primary">LINK</span></p>
{{--        <img src="{{ asset('images/worklinklogo.png') }}" alt="logo" class="h-10">--}}
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-6 w-6 fill-primary" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-sm text-primary-light {{ request()->is('/') ? 'font-bold' : 'font-normal' }} hover:text-gray-500" href="/">Pagrindinis</a></li>
        <li class="text-primary-light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-primary-light {{ request()->is('partners') ? 'font-bold' : 'font-normal' }} hover:text-gray-500" href="/partners">Paslaugų teikėjams</a></li>
        <li class="text-primary-light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-primary-light {{ request()->is('kontaktai') ? 'font-bold' : 'font-normal' }} hover:text-gray-500" href="#">Kontaktai</a></li>
        <li class="text-primary-light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-primary-light {{ request()->is('duk') ? 'font-bold' : 'font-normal' }} hover:text-gray-500" href="#">DUK</a></li>
        <li class="text-primary-light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-primary-light {{ request()->is('apiemus') ? 'font-bold' : 'font-normal' }} hover:text-gray-500" href="#">Apie Mus</a></li>
    </ul>

    @guest
    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-primary font-bold  rounded-xl transition duration-200" href="/login">Prisijungti</a>
    <a class="hidden lg:inline-block py-2 px-6 bg-primary-light hover:bg-primary-verylight text-sm text-white font-bold rounded-xl transition duration-200" href="/register/seeker">Registruotis</a>
    @endguest

    @auth
        <div class="hidden lg:inline-block relative group lg:ml-auto lg:mr-3">
            <!-- User avatar button -->
            <button class="flex items-center focus:outline-none">
                <div class="w-10 h-10 rounded-full bg-primary-light flex items-center justify-center hover:bg-primary-verylight transition duration-200">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </button>

            <!-- Dropdown menu -->
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 invisible opacity-0 group-focus-within:visible group-focus-within:opacity-100 group-hover:visible group-hover:opacity-100 transition-all duration-200">
                <!-- Role display -->
                <div class="px-4 py-2 border-b border-gray-100">
                    <div class="text-xs font-medium text-primary-dark">Logged in as</div>
                    <div class="text-sm font-semibold text-gray-700 truncate">{{ auth()->user()->role }}</div>
                </div>

                <a href="/profile" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                    Profilis
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                        Atsijungti
                    </button>
                </form>
            </div>
        </div>
    @endauth

</nav>
<div class="navbar-menu fixed inset-0 z-50 hidden transform -translate-x-full transition-transform duration-300 ease-in-out bg-white">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-50"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <p class="text-primary-light font-bold sm:text-3xl text-2xl">WORK<span class="text-primary">LINK</span></p>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 rounded font-bold {{ request()->is('/') ? 'text-primary-light text-xl' : 'text-gray-500 text-lg' }}" href="/">Pagrindinis</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 rounded font-bold {{ request()->is('partners') ? 'text-primary-light text-xl' : 'text-gray-500 text-lg' }}" href="/partners">Paslaugų Teikėjams</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 rounded font-bold {{ request()->is('kontaktai') ? 'text-primary-light text-xl' : 'text-gray-500 text-lg' }}" href="/kontaktai">Kontaktai</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 rounded font-bold {{ request()->is('duk') ? 'text-primary-light text-xl' : 'text-gray-500 text-lg' }}" href="/duk">DUK</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 rounded font-bold {{ request()->is('apiemus') ? 'text-primary-light text-xl' : 'text-gray-500 text-lg' }}" href="/apiemus">Apie Mus</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-2 mb-3 leading-loose text-lg text-center font-semibold bg-gray-200 hover:bg-gray-100 rounded-xl text-primary-dark" href="/login">Prisijungti</a>
                <a class="block px-4 py-2 mb-2 leading-loose text-lg text-center text-white font-semibold bg-primary-light hover:bg-primary-verylight rounded-xl" href="/register/seeker">Registruotis</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>WorkLink 2025</span>
            </p>
        </div>
    </nav>
</div>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        const burger = document.querySelector('.navbar-burger');
        const menu = document.querySelector('.navbar-menu');
        const close = document.querySelector('.navbar-close');
        const backdrop = document.querySelector('.navbar-backdrop');

        if (burger && menu) {
            burger.addEventListener('click', () => {
                menu.classList.remove('hidden');
                menu.classList.remove('-translate-x-full');
                menu.classList.add('translate-x-0');
            });
        }

        if (close && menu) {
            close.addEventListener('click', () => {
                menu.classList.add('-translate-x-full');
                menu.classList.remove('translate-x-0');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 300); // Match the duration of the slide transition
            });
        }

        if (backdrop && menu) {
            backdrop.addEventListener('click', () => {
                menu.classList.add('-translate-x-full');
                menu.classList.remove('translate-x-0');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 300);
            });
        }
    });
</script>
