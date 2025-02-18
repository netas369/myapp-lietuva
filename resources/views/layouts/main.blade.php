<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Include Tailwind compiled by Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('layouts.navbar')

<body class="bg-gray-50 text-gray-800">

<div class="container mx-auto px-4">
    @yield('content')
</div>
</body>

 @include('layouts.footer')

@yield('script')
</html>
