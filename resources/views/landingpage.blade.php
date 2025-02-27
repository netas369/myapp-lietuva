@extends('layouts.main')


@section('content')
    <!-- MAIN CONTENT DIV -->
    <div class="px-4 sm:px-6 md:px-10 lg:px-20 xl:px-40 2xl:px-60 lg:mt-24 md:mt-14">
        <div class="text-center mt-10">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-light font-sans leading-7">Rasti profesionalią pagalbą - dabar lengva.</h1>
            <p class="mt-10 text-lg text-primary-light font-sans">Susisiekite tiesiogiai su patikimais paslaugų teikėjais visiems namų poreikiams, nuo žolės
        pjovimo iki dažymo ir dar daugiau.</p>
        </div>
    <div>

        @livewire('search-bar')

        <!-- Skiriamoji juosta -->
        <div class="flex justify-center items-center space-x-2 mx-auto max-w-md my-8 mt-12">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
        </div>

{{--        <!-- Improved Categories Section with Responsive Layout -->--}}
{{--        <div class="px-4 sm:px-6 md:px-10 lg:px-20 xl:px-40 2xl:px-60">--}}
{{--            <div class="text-center mt-10 mb-8">--}}
{{--                <h1 class="text-3xl lg:text-4xl font-bold text-primary-light font-sans leading-tight">Visos Kategorijos</h1>--}}
{{--            </div>--}}

{{--            <!-- Mobile View: Horizontal Scrolling with Improved UX -->--}}
{{--            <section class="lg:hidden relative">--}}
{{--                <!-- Scroll indicator -->--}}
{{--                <div class="absolute right-0 top-1/2 -translate-y-1/2 bg-gradient-to-l from-white via-white to-transparent w-12 h-full flex items-center justify-end pr-2 pointer-events-none z-10">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-light animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />--}}
{{--                    </svg>--}}
{{--                </div>--}}

{{--                <!-- Scroll container -->--}}
{{--                <div class="flex snap-x snap-mandatory flex-nowrap overflow-x-auto overflow-y-hidden pb-2 scrollbar-hide">--}}
{{--                    <ul class="flex flex-nowrap -mb-px"--}}
{{--                        id="mobile-categories-tab"--}}
{{--                        data-tabs-toggle="#categories-tab-content"--}}
{{--                        data-tabs-active-classes="text-primary-light border-b-2 border-primary-light font-semibold"--}}
{{--                        data-tabs-inactive-classes="text-gray-500 hover:text-primary-light/80 hover:border-gray-300"--}}
{{--                        role="tablist">--}}

{{--                        <!-- Category 1: Valymas -->--}}
{{--                        <li class="w-[100px] flex-none snap-always snap-center">--}}
{{--                            <button class="inline-block p-4 rounded-lg transition-all duration-200 hover:bg-gray-50 group focus:outline-none focus:ring-2 focus:ring-primary-light/50"--}}
{{--                                    id="valymas-tab"--}}
{{--                                    data-tabs-target="#styled-valymas"--}}
{{--                                    type="button"--}}
{{--                                    role="tab"--}}
{{--                                    aria-controls="valymas"--}}
{{--                                    aria-selected="false">--}}

{{--                                <div class="w-14 h-14 mx-auto relative transition-transform duration-200 transform group-hover:-translate-y-1">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="ICON Black" viewBox="0 0 32 40" class="w-full h-full text-gray-600 group-hover:text-primary-light" fill="currentColor" aria-hidden="true">--}}
{{--                                        <path d="M29.5,20.606V18.759a1.5,1.5,0,0,0-1.5-1.5H22.873V9.27a2,2,0,0,0-2-2h-.745a2,2,0,0,0-2,2v7.989H13a1.5,1.5,0,0,0-1.5,1.5v1.847a1.5,1.5,0,0,0,.932,1.387L11.9,28.962a.509.509,0,0,0,.132.378.5.5,0,0,0,.367.16H28.6a.5.5,0,0,0,.367-.16.509.509,0,0,0,.132-.378l-.533-6.969A1.5,1.5,0,0,0,29.5,20.606ZM19.13,9.27a1,1,0,0,1,1-1h.745a1,1,0,0,1,1,1v7.989H19.13ZM12.5,18.759a.5.5,0,0,1,.5-.5H28a.5.5,0,0,1,.5.5v1.847a.5.5,0,0,1-.5.5H13a.5.5,0,0,1-.5-.5Zm.439,9.741.488-6.394h2.735l-.133,2.986a.5.5,0,0,0,.477.522h.022a.5.5,0,0,0,.5-.478l.135-3.031H20V23.36a.5.5,0,0,0,1,0V22.106h2.836l.135,3.031a.5.5,0,0,0,.5.478h.022a.5.5,0,0,0,.477-.522l-.133-2.986h2.735l.489,6.394ZM5,19.069l2.946-3.911a1.509,1.509,0,0,1,1.2-.6h4.1a.5.5,0,0,1,.5.5V16a.5.5,0,0,0,1,0v-.94a1.5,1.5,0,0,0-1.437-1.494V11.973a1.5,1.5,0,0,0,1.438-1.494V8.458a1.5,1.5,0,0,0-1.5-1.5H8.376A1.5,1.5,0,0,0,6.929,8.083H5.406a1.386,1.386,0,0,0,0,2.771H6.929a1.482,1.482,0,0,0,.306.587L5.6,13.772a.5.5,0,0,0,.122.7.491.491,0,0,0,.287.091.5.5,0,0,0,.409-.212l1.683-2.4a1.487,1.487,0,0,0,.277.028h2.1V13.56H9.147a2.515,2.515,0,0,0-2,1L4.2,18.468a3.52,3.52,0,0,0-.7,2.105V28A1.5,1.5,0,0,0,5,29.5h5.469a.5.5,0,1,0,0-1H5a.5.5,0,0,1-.5-.5V20.573A2.519,2.519,0,0,1,5,19.069ZM7.876,8.458a.5.5,0,0,1,.5-.5h4.875a.5.5,0,0,1,.5.5v2.021a.5.5,0,0,1-.5.5H8.376a.5.5,0,0,1-.5-.5V8.458ZM5.021,9.469a.385.385,0,0,1,.385-.386h1.47v.771H5.406A.385.385,0,0,1,5.021,9.469Zm6.458,2.51h.834V13.56h-.834Z" />--}}
{{--                                    </svg>--}}
{{--                                </div>--}}

{{--                                <span class="block mt-2 text-sm font-medium transition-colors duration-200 group-hover:text-primary-light">Valymas</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}

{{--                        <!-- Category 2: Kūryba -->--}}
{{--                        <li class="w-[100px] flex-none snap-always snap-center">--}}
{{--                            <button class="inline-block p-4 rounded-lg transition-all duration-200 hover:bg-gray-50 group focus:outline-none focus:ring-2 focus:ring-primary-light/50"--}}
{{--                                    id="kuryba-tab"--}}
{{--                                    data-tabs-target="#styled-kuryba"--}}
{{--                                    type="button"--}}
{{--                                    role="tab"--}}
{{--                                    aria-controls="kuryba"--}}
{{--                                    aria-selected="false">--}}

{{--                                <div class="w-14 h-14 mx-auto relative transition-transform duration-200 transform group-hover:-translate-y-1">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 35" class="w-full h-full text-gray-600 group-hover:text-primary-light" fill="currentColor" aria-hidden="true">--}}
{{--                                        <title>Kūryba</title>--}}
{{--                                        <g data-name="Layer 2">--}}
{{--                                            <path d="M25.814,11.637a1.476,1.476,0,0,0-1.514.1l-3.8,2.709V12.937A2.439,2.439,0,0,0,18.063,10.5h-.269a4.489,4.489,0,1,0-6.957-5.2,3.991,3.991,0,1,0-5.955,5.2H3.937A2.439,2.439,0,0,0,1.5,12.937V23.063A2.439,2.439,0,0,0,3.937,25.5H18.063A2.439,2.439,0,0,0,20.5,23.063V21.525l1.132.807a.489.489,0,0,0,.183.131L24.3,24.235a1.446,1.446,0,0,0,.839.265,1.47,1.47,0,0,0,.675-.163,1.2,1.2,0,0,0,.686-1.074V12.711A1.2,1.2,0,0,0,25.814,11.637ZM15,3.5A3.5,3.5,0,1,1,11.5,7,3.5,3.5,0,0,1,15,3.5Zm-2.794,7H10.118A4.011,4.011,0,0,0,11.1,9.207,4.5,4.5,0,0,0,12.206,10.5ZM4.5,7.5a3,3,0,1,1,3,3A3,3,0,0,1,4.5,7.5Zm15,15.563A1.439,1.439,0,0,1,18.063,24.5H3.937A1.439,1.439,0,0,1,2.5,23.063V12.937A1.439,1.439,0,0,1,3.937,11.5H18.063A1.439,1.439,0,0,1,19.5,12.937Zm1-7.386,1-.713V21.01l-1-.714Zm5,7.586a.231.231,0,0,1-.143.185.471.471,0,0,1-.476-.027l-2.381-1.7V14.251l2.381-1.7a.471.471,0,0,1,.476-.027.231.231,0,0,1,.143.185Z"/>--}}
{{--                                        </g>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}

{{--                                <span class="block mt-2 text-sm font-medium transition-colors duration-200 group-hover:text-primary-light">Kūryba</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}

{{--                        <!-- Additional categories would follow the same pattern -->--}}
{{--                        <!-- I'll include one more as an example -->--}}

{{--                        <!-- Category 3: Meistrai -->--}}
{{--                        <li class="w-[100px] flex-none snap-always snap-center">--}}
{{--                            <button class="inline-block p-4 rounded-lg transition-all duration-200 hover:bg-gray-50 group focus:outline-none focus:ring-2 focus:ring-primary-light/50"--}}
{{--                                    id="meistrai-tab"--}}
{{--                                    data-tabs-target="#styled-meistrai"--}}
{{--                                    type="button"--}}
{{--                                    role="tab"--}}
{{--                                    aria-controls="meistrai"--}}
{{--                                    aria-selected="false">--}}

{{--                                <div class="w-14 h-14 mx-auto relative transition-transform duration-200 transform group-hover:-translate-y-1">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5.0 -10.0 110.0 135.0" class="w-full h-full text-gray-600 group-hover:text-primary-light" fill="currentColor" aria-hidden="true">--}}
{{--                                        <!-- SVG path omitted for brevity, but would be the same as original -->--}}
{{--                                        <path d="m82.434 34.676h2.125c8.5117 0 15.441-6.9258 15.441-15.441 0-8.5117-6.9258-15.438-15.441-15.438h-39.953c-0.86328 0-1.5625 0.69922-1.5625 1.5625v2.6836h-7.8945c-0.86328 0-1.5625 0.69922-1.5625 1.5625v1.9922h-7.8945c-0.86328 0-1.5625 0.69922-1.5625 1.5625v1.9922h-7.8945c-0.86328 0-1.5625 0.69922-1.5625 1.5625v0.95703h-7.8945c-0.22656 0-0.45312 0.050781-0.66016 0.14453l-5.2109 2.4297c-0.55078 0.25781-0.90625 0.80859-0.90625 1.418 0 0.60938 0.35156 1.1602 0.90625 1.418l5.2188 2.4258c0.20703 0.097657 0.43359 0.14453 0.66016 0.14453h7.8945v0.95703c0 0.86328 0.69922 1.5625 1.5625 1.5625h7.8945v1.9922c0 0.86328 0.69922 1.5625 1.5625 1.5625h7.8945v1.9922c0 0.86328 0.69922 1.5625 1.5625 1.5625h7.8945v2.6836c0 0.86328 0.69922 1.5625 1.5625 1.5625h6.3203v6.375c0 1.5273 1.2422 2.7695 2.7695 2.7695h4.3125l3.0469 13.316h-2.6172c-4.8125 0-8.7227 3.9141-8.7227 8.7227v3.6016h-2.5781c-6.0352 0-10.945 4.9102-10.945 10.945 0 6.0352 4.9102 10.945 10.945 10.945h36.516c6.0352 0 10.945-4.9102 10.945-10.945 0-3.418-1.5781-6.4727-4.043-8.4844v-6.0625c0-4.6484-3.6602-8.4492-8.2461-8.6992 1.25-7.8945-0.87891-13.965-2.9883-17.758-1.4531-2.6133-0.95703-5.8359 1.2109-7.832l1.9023-1.7539z"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}

{{--                                <span class="block mt-2 text-sm font-medium transition-colors duration-200 group-hover:text-primary-light">Meistrai</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}

{{--                        <!-- Additional categories would continue here -->--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </section>--}}

{{--            <!-- Desktop View: Grid Layout -->--}}
{{--            <section class="hidden lg:block border-b-2 border-primary-light border-opacity-50">--}}
{{--                <ul class="grid grid-cols-4 xl:grid-cols-8 gap-4 py-3"--}}
{{--                    id="desktop-categories-tab"--}}
{{--                    data-tabs-toggle="#categories-tab-content"--}}
{{--                    data-tabs-active-classes="text-primary-light border-b-2 border-primary-light font-semibold"--}}
{{--                    data-tabs-inactive-classes="text-gray-500 hover:text-primary-light/80 hover:border-gray-300"--}}
{{--                    role="tablist">--}}

{{--                    <!-- Desktop Category 1: Valymas -->--}}
{{--                    <li class="flex items-center justify-center">--}}
{{--                        <button class="p-3 rounded-lg transition-all duration-200 flex flex-col items-center hover:bg-gray-50 group focus:outline-none focus:ring-2 focus:ring-primary-light/50"--}}
{{--                                id="desktop-valymas-tab"--}}
{{--                                data-tabs-target="#styled-valymas"--}}
{{--                                type="button"--}}
{{--                                role="tab"--}}
{{--                                aria-controls="valymas"--}}
{{--                                aria-selected="false">--}}

{{--                            <div class="w-12 h-12 mb-2 transition-transform duration-200 transform group-hover:-translate-y-1 group-hover:shadow-sm">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" data-name="ICON Black" viewBox="0 0 32 40" class="w-full h-full text-gray-600 group-hover:text-primary-light" fill="currentColor" aria-hidden="true">--}}
{{--                                    <path d="M29.5,20.606V18.759a1.5,1.5,0,0,0-1.5-1.5H22.873V9.27a2,2,0,0,0-2-2h-.745a2,2,0,0,0-2,2v7.989H13a1.5,1.5,0,0,0-1.5,1.5v1.847a1.5,1.5,0,0,0,.932,1.387L11.9,28.962a.509.509,0,0,0,.132.378.5.5,0,0,0,.367.16H28.6a.5.5,0,0,0,.367-.16.509.509,0,0,0,.132-.378l-.533-6.969A1.5,1.5,0,0,0,29.5,20.606ZM19.13,9.27a1,1,0,0,1,1-1h.745a1,1,0,0,1,1,1v7.989H19.13ZM12.5,18.759a.5.5,0,0,1,.5-.5H28a.5.5,0,0,1,.5.5v1.847a.5.5,0,0,1-.5.5H13a.5.5,0,0,1-.5-.5Zm.439,9.741.488-6.394h2.735l-.133,2.986a.5.5,0,0,0,.477.522h.022a.5.5,0,0,0,.5-.478l.135-3.031H20V23.36a.5.5,0,0,0,1,0V22.106h2.836l.135,3.031a.5.5,0,0,0,.5.478h.022a.5.5,0,0,0,.477-.522l-.133-2.986h2.735l.489,6.394ZM5,19.069l2.946-3.911a1.509,1.509,0,0,1,1.2-.6h4.1a.5.5,0,0,1,.5.5V16a.5.5,0,0,0,1,0v-.94a1.5,1.5,0,0,0-1.437-1.494V11.973a1.5,1.5,0,0,0,1.438-1.494V8.458a1.5,1.5,0,0,0-1.5-1.5H8.376A1.5,1.5,0,0,0,6.929,8.083H5.406a1.386,1.386,0,0,0,0,2.771H6.929a1.482,1.482,0,0,0,.306.587L5.6,13.772a.5.5,0,0,0,.122.7.491.491,0,0,0,.287.091.5.5,0,0,0,.409-.212l1.683-2.4a1.487,1.487,0,0,0,.277.028h2.1V13.56H9.147a2.515,2.515,0,0,0-2,1L4.2,18.468a3.52,3.52,0,0,0-.7,2.105V28A1.5,1.5,0,0,0,5,29.5h5.469a.5.5,0,1,0,0-1H5a.5.5,0,0,1-.5-.5V20.573A2.519,2.519,0,0,1,5,19.069ZM7.876,8.458a.5.5,0,0,1,.5-.5h4.875a.5.5,0,0,1,.5.5v2.021a.5.5,0,0,1-.5.5H8.376a.5.5,0,0,1-.5-.5V8.458ZM5.021,9.469a.385.385,0,0,1,.385-.386h1.47v.771H5.406A.385.385,0,0,1,5.021,9.469Zm6.458,2.51h.834V13.56h-.834Z" />--}}
{{--                                </svg>--}}
{{--                            </div>--}}

{{--                            <span class="text-sm font-medium transition-colors duration-200 group-hover:text-primary-light">Valymas</span>--}}
{{--                        </button>--}}
{{--                    </li>--}}

{{--                    <!-- Additional desktop categories would follow the same pattern -->--}}
{{--                    <!-- For brevity, I'm not including all of them here -->--}}
{{--                </ul>--}}
{{--            </section>--}}

{{--            <!-- Content container for tab panels -->--}}
{{--            <div id="categories-tab-content">--}}
{{--                <div id="styled-valymas" role="tabpanel" aria-labelledby="valymas-tab" class="hidden">--}}
{{--                    <!-- Valymas content would go here -->--}}
{{--                </div>--}}
{{--                <div id="styled-kuryba" role="tabpanel" aria-labelledby="kuryba-tab" class="hidden">--}}
{{--                    <!-- Kūryba content would go here -->--}}
{{--                </div>--}}
{{--                <!-- Additional tab content would go here -->--}}
{{--            </div>--}}
{{--        </div>--}}


        <!-- Populiarios kategorijos -->
        <div class="px-4 sm:px-6 md:px-10 lg:px-20 xl:px-40 2xl:px-60">
            <div class="text-center mt-10">
                <h1 class="text-3xl lg:text-4xl font-bold text-primary-light font-sans leading-7">Visos Kategorijos</h1>
            </div>
        </div>

        <section class="flex snap-x snap-mandatory flex-nowrap overflow-x-auto overflow-y-hidden lg:items-center lg:justify-center mt-8 border-b-2 border-gray-500 border-opacity-50">
            <!-- Scroll indicator overlay - better positioned at the top of tabs -->
            <div class="absolute inset-x-0 top-0 z-20 pointer-events-none lg:hidden">
                <div class="bg-primary bg-opacity-80 text-white text-center py-1 px-4 mx-auto w-max rounded-b-lg shadow-md">
                    <div class="flex items-center text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1.5 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m-8 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        Swipe to see more
                    </div>
                </div>
            </div>

            <!-- Right edge gradient for scrolling indication -->
            <div class="absolute right-0 top-0 h-full bg-gradient-to-l from-white to-transparent w-12 pointer-events-none z-10 lg:hidden">
                <div class="h-full flex items-center justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-light animate-pulse mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>

            <!-- Left edge gradient (shows when scrolled) -->
            <div class="absolute left-0 top-0 h-full bg-gradient-to-r from-white to-transparent w-12 pointer-events-none z-10 opacity-0 transition-opacity duration-300 lg:hidden" id="left-scroll-indicator">
                <div class="h-full flex items-center justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-light animate-pulse ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
            </div>

            <ul
                class="flex flex-nowrap -mb-px text-sm font-medium text-center"
                id="default-styled-tab"
                data-tabs-toggle="#default-styled-tab-content"
                data-tabs-active-classes="text-primary-light hover:text-primary-light border-t-2 border-primary/50"
                data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 hover:border-gray-300"
                role="tablist">
                <li>
                    <div class="w-[110px] flex-none snap-always snap-center">
                        <button class="inline-block p-4 rounded-t-lg transition-all duration-200 hover:bg-gray-50 group"
                                id="profile-styled-tab" data-tabs-target="#styled-valymas" type="button" role="tab" aria-controls="valymas" aria-selected="false">
                            <div class="w-14 h-14 mx-auto relative flex items-center justify-center transition-transform duration-200 transform group-hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 40" class="w-full h-full text-gray-600 group-hover:text-primary-light" aria-hidden="true" fill="currentColor">
                                    <path d="M29.5,20.606V18.759a1.5,1.5,0,0,0-1.5-1.5H22.873V9.27a2,2,0,0,0-2-2h-.745a2,2,0,0,0-2,2v7.989H13a1.5,1.5,0,0,0-1.5,1.5v1.847a1.5,1.5,0,0,0,.932,1.387L11.9,28.962a.509.509,0,0,0,.132.378.5.5,0,0,0,.367.16H28.6a.5.5,0,0,0,.367-.16.509.509,0,0,0,.132-.378l-.533-6.969A1.5,1.5,0,0,0,29.5,20.606ZM19.13,9.27a1,1,0,0,1,1-1h.745a1,1,0,0,1,1,1v7.989H19.13ZM12.5,18.759a.5.5,0,0,1,.5-.5H28a.5.5,0,0,1,.5.5v1.847a.5.5,0,0,1-.5.5H13a.5.5,0,0,1-.5-.5Zm.439,9.741.488-6.394h2.735l-.133,2.986a.5.5,0,0,0,.477.522h.022a.5.5,0,0,0,.5-.478l.135-3.031H20V23.36a.5.5,0,0,0,1,0V22.106h2.836l.135,3.031a.5.5,0,0,0,.5.478h.022a.5.5,0,0,0,.477-.522l-.133-2.986h2.735l.489,6.394ZM5,19.069l2.946-3.911a1.509,1.509,0,0,1,1.2-.6h4.1a.5.5,0,0,1,.5.5V16a.5.5,0,0,0,1,0v-.94a1.5,1.5,0,0,0-1.437-1.494V11.973a1.5,1.5,0,0,0,1.438-1.494V8.458a1.5,1.5,0,0,0-1.5-1.5H8.376A1.5,1.5,0,0,0,6.929,8.083H5.406a1.386,1.386,0,0,0,0,2.771H6.929a1.482,1.482,0,0,0,.306.587L5.6,13.772a.5.5,0,0,0,.122.7.491.491,0,0,0,.287.091.5.5,0,0,0,.409-.212l1.683-2.4a1.487,1.487,0,0,0,.277.028h2.1V13.56H9.147a2.515,2.515,0,0,0-2,1L4.2,18.468a3.52,3.52,0,0,0-.7,2.105V28A1.5,1.5,0,0,0,5,29.5h5.469a.5.5,0,1,0,0-1H5a.5.5,0,0,1-.5-.5V20.573A2.519,2.519,0,0,1,5,19.069ZM7.876,8.458a.5.5,0,0,1,.5-.5h4.875a.5.5,0,0,1,.5.5v2.021a.5.5,0,0,1-.5.5H8.376a.5.5,0,0,1-.5-.5V8.458ZM5.021,9.469a.385.385,0,0,1,.385-.386h1.47v.771H5.406A.385.385,0,0,1,5.021,9.469Zm6.458,2.51h.834V13.56h-.834Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span class="block mt-2 font-medium text-primary transition-colors duration-200 group-hover:text-primary-light h-10 text-xs sm:text-sm leading-tight">Valymas</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="w-[110px] flex-none snap-always snap-center">
                        <button class="inline-block p-4 rounded-t-lg transition-all duration-200 hover:bg-gray-50 group"
                                id="dashboard-styled-tab" data-tabs-target="#styled-kuryba" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            <div class="w-14 h-14 mx-auto relative flex items-center justify-center transition-transform duration-200 transform group-hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 35" x="0px" y="0px" class="w-full h-full text-gray-600 group-hover:text-primary-light" aria-hidden="true" fill="currentColor">
                                    <title>photo</title>
                                    <g data-name="Layer 2">
                                        <path d="M25.814,11.637a1.476,1.476,0,0,0-1.514.1l-3.8,2.709V12.937A2.439,2.439,0,0,0,18.063,10.5h-.269a4.489,4.489,0,1,0-6.957-5.2,3.991,3.991,0,1,0-5.955,5.2H3.937A2.439,2.439,0,0,0,1.5,12.937V23.063A2.439,2.439,0,0,0,3.937,25.5H18.063A2.439,2.439,0,0,0,20.5,23.063V21.525l1.132.807a.489.489,0,0,0,.183.131L24.3,24.235a1.446,1.446,0,0,0,.839.265,1.47,1.47,0,0,0,.675-.163,1.2,1.2,0,0,0,.686-1.074V12.711A1.2,1.2,0,0,0,25.814,11.637ZM15,3.5A3.5,3.5,0,1,1,11.5,7,3.5,3.5,0,0,1,15,3.5Zm-2.794,7H10.118A4.011,4.011,0,0,0,11.1,9.207,4.5,4.5,0,0,0,12.206,10.5ZM4.5,7.5a3,3,0,1,1,3,3A3,3,0,0,1,4.5,7.5Zm15,15.563A1.439,1.439,0,0,1,18.063,24.5H3.937A1.439,1.439,0,0,1,2.5,23.063V12.937A1.439,1.439,0,0,1,3.937,11.5H18.063A1.439,1.439,0,0,1,19.5,12.937Zm1-7.386,1-.713V21.01l-1-.714Zm5,7.586a.231.231,0,0,1-.143.185.471.471,0,0,1-.476-.027l-2.381-1.7V14.251l2.381-1.7a.471.471,0,0,1,.476-.027.231.231,0,0,1,.143.185Z" fill="currentColor"/>
                                        <path d="M7.5,5.833A1.667,1.667,0,1,0,9.167,7.5,1.669,1.669,0,0,0,7.5,5.833Zm0,2.334A.667.667,0,1,1,8.167,7.5.667.667,0,0,1,7.5,8.167Z" fill="currentColor"/>
                                        <path d="M15,9.214A2.214,2.214,0,1,0,12.786,7,2.216,2.216,0,0,0,15,9.214Zm0-3.428A1.214,1.214,0,1,1,13.786,7,1.216,1.216,0,0,1,15,5.786Z" fill="currentColor"/>
                                        <path d="M13.279,18.5H5.721A1.223,1.223,0,0,0,4.5,19.721v1.558A1.223,1.223,0,0,0,5.721,22.5h7.558A1.223,1.223,0,0,0,14.5,21.279V19.721A1.223,1.223,0,0,0,13.279,18.5Zm.221,2.779a.221.221,0,0,1-.221.221H5.721a.221.221,0,0,1-.221-.221V19.721a.221.221,0,0,1,.221-.221h7.558a.221.221,0,0,1,.221.221Z" fill="currentColor"/>
                                        <path d="M16.572,13.5H15.428a.929.929,0,0,0-.928.928v1.144a.929.929,0,0,0,.928.928h1.144a.929.929,0,0,0,.928-.928V14.428A.929.929,0,0,0,16.572,13.5Zm-.072,2h-1v-1h1Z" fill="currentColor"/>
                                        <path d="M12,16.5A1.5,1.5,0,1,0,10.5,15,1.5,1.5,0,0,0,12,16.5Zm0-2a.5.5,0,1,1-.5.5A.5.5,0,0,1,12,14.5Z" fill="currentColor"/>
                                    </g>
                                </svg>
                            </div>
                            <span class="block mt-2 font-medium text-primary transition-colors duration-200 group-hover:text-primary-light h-10 text-xs sm:text-sm leading-tight">Kūryba</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="w-[110px] flex-none snap-always snap-center">
                        <button class="inline-block p-4 rounded-t-lg transition-all duration-200 hover:bg-gray-50 group"
                                id="dashboard-styled-tab" data-tabs-target="#styled-meistrai" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            <div class="w-14 h-14 mx-auto relative flex items-center justify-center transition-transform duration-200 transform group-hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0" class="w-full h-full text-gray-600 group-hover:text-primary-light" aria-hidden="true" fill="currentColor">
                                    <path d="m82.434 34.676h2.125c8.5117 0 15.441-6.9258 15.441-15.441 0-8.5117-6.9258-15.438-15.441-15.438h-39.953c-0.86328 0-1.5625 0.69922-1.5625 1.5625v2.6836h-7.8945c-0.86328 0-1.5625 0.69922-1.5625 1.5625v1.9922h-7.8945c-0.86328 0-1.5625 0.69922-1.5625 1.5625v1.9922h-7.8945c-0.86328 0-1.5625 0.69922-1.5625 1.5625v0.95703h-7.8945c-0.22656 0-0.45312 0.050781-0.66016 0.14453l-5.2109 2.4297c-0.55078 0.25781-0.90625 0.80859-0.90625 1.418 0 0.60938 0.35156 1.1602 0.90625 1.418l5.2188 2.4258c0.20703 0.097657 0.43359 0.14453 0.66016 0.14453h7.8945v0.95703c0 0.86328 0.69922 1.5625 1.5625 1.5625h7.8945v1.9922c0 0.86328 0.69922 1.5625 1.5625 1.5625h7.8945v1.9922c0 0.86328 0.69922 1.5625 1.5625 1.5625h7.8945v2.6836c0 0.86328 0.69922 1.5625 1.5625 1.5625h6.3203v6.375c0 1.5273 1.2422 2.7695 2.7695 2.7695h4.3125l3.0469 13.316h-2.6172c-4.8125 0-8.7227 3.9141-8.7227 8.7227v3.6016h-2.5781c-6.0352 0-10.945 4.9102-10.945 10.945 0 6.0352 4.9102 10.945 10.945 10.945h36.516c6.0352 0 10.945-4.9102 10.945-10.945 0-3.418-1.5781-6.4727-4.043-8.4844v-6.0625c0-4.6484-3.6602-8.4492-8.2461-8.6992 1.25-7.8945-0.87891-13.965-2.9883-17.758-1.4531-2.6133-0.95703-5.8359 1.2109-7.832l1.9023-1.7539zm14.438-15.441c0 6.7891-5.5234 12.312-12.312 12.312h-25.906v-24.625h25.906c6.7891 0 12.312 5.5234 12.312 12.312zm-89.742 3.2891-1.8555-0.86328 1.8555-0.86328h7.5469v1.7266zm10.676 2.5195v-6.7617h6.3281v6.7617zm9.4531 3.5547v-13.875h6.3281v13.875zm9.457 3.5586v-20.988h6.3281v20.984h-6.3281zm9.457-25.234h9.3555v26.191c0 0.007813 0.003906 0.015625 0.003906 0.023438v3.2656h-9.3594zm7.8828 32.605h4.4375v6.0195h-4.4375zm6.9297 8.125c0.39062-0.47656 0.63672-1.082 0.63672-1.7461v-6.7344c0-1.5273-1.2422-2.7695-2.7695-2.7695h-0.17187l-0.011719-1.7266h8.2891c-0.37109 4.1289-0.82422 13.93 2.6445 17.977 0.67969 0.79297 1.4961 1.3516 2.4023 1.6562v7.6875h-7.7383l-3.2812-14.34zm30.484 37.609c0 4.3086-3.5078 7.8164-7.8164 7.8164h-36.516c-4.3086 0-7.8164-3.5078-7.8164-7.8164 0-4.3086 3.5078-7.8164 7.8164-7.8164h36.516c4.3086 0 7.8164 3.5078 7.8164 7.8164zm-4.043-14.547v4.2852c-1.1797-0.43359-2.4453-0.6875-3.7734-0.6875h-30.809v-3.6016c0-3.0859 2.5117-5.5977 5.5977-5.5977h23.391c3.0859 0 5.5977 2.5117 5.5977 5.5977zm-8.3164-8.7227h-3.9805v-8.9844c0-0.84766-0.67578-1.5391-1.5234-1.5625-0.64453-0.015624-1.1641-0.28125-1.6328-0.82812-2.5039-2.9219-2.2852-11.516-1.875-15.941h7.8125c-2.7812 2.9961-3.3594 7.4414-1.3242 11.105 1.9023 3.4219 3.7891 8.9688 2.5234 16.211z" fill="currentColor"/>
                                    <path d="m67.605 26.148c3.0312 0 5.5625-2.1016 6.2695-4.918h10.625v4.9414c0 0.86328 0.69922 1.5625 1.5625 1.5625s1.5625-0.69922 1.5625-1.5625v-12.559c0-0.86328-0.69922-1.5625-1.5625-1.5625s-1.5625 0.69922-1.5625 1.5625v4.4883h-10.625c-0.70312-2.8164-3.2383-4.918-6.2695-4.918-3.5742 0-6.4805 2.9062-6.4805 6.4805 0 3.5742 2.9062 6.4805 6.4805 6.4805zm0-9.8359c1.8477 0 3.3555 1.5039 3.3555 3.3555 0 1.8477-1.5039 3.3516-3.3555 3.3516-1.8477 0-3.3516-1.5039-3.3516-3.3516 0-1.8477 1.5039-3.3555 3.3516-3.3555z" fill="currentColor"/>
                                    <path d="m47.574 80.422c-2.668 0-4.8398 2.1719-4.8398 4.8398s2.1719 4.8398 4.8398 4.8398 4.8398-2.1719 4.8398-4.8398-2.1719-4.8398-4.8398-4.8398zm0 6.5508c-0.94531 0-1.7109-0.76953-1.7109-1.7109 0-0.94141 0.76953-1.7148 1.7109-1.7148 0.94531 0 1.7109 0.76953 1.7109 1.7148 0 0.94531-0.76953 1.7109-1.7109 1.7109z" fill="currentColor"/>
                                    <path d="m83.453 80.422c-2.668 0-4.8398 2.1719-4.8398 4.8398s2.1719 4.8398 4.8398 4.8398 4.8398-2.1719 4.8398-4.8398-2.1719-4.8398-4.8398-4.8398zm0 6.5508c-0.94531 0-1.7109-0.76953-1.7109-1.7109 0-0.94141 0.76953-1.7148 1.7109-1.7148 0.94531 0 1.7109 0.76953 1.7109 1.7148 0 0.94531-0.76953 1.7109-1.7109 1.7109z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span class="block mt-2 font-medium text-primary transition-colors duration-200 group-hover:text-primary-light h-10 text-xs sm:text-sm leading-tight">Meistrai</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="w-[110px] flex-none snap-always snap-center">
                        <button class="inline-block p-4 rounded-t-lg transition-all duration-200 hover:bg-gray-50 group"
                                id="dashboard-styled-tab" data-tabs-target="#styled-kraustymas" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            <div class="w-14 h-14 mx-auto relative flex items-center justify-center transition-transform duration-200 transform group-hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0" class="w-full h-full text-gray-600 group-hover:text-primary-light" aria-hidden="true" fill="currentColor">
                                    <path d="m23.438 78.125c-2.5859 0-4.6875 2.1016-4.6875 4.6875s2.1016 4.6875 4.6875 4.6875 4.6875-2.1016 4.6875-4.6875-2.1016-4.6875-4.6875-4.6875zm0 6.25c-0.86328 0-1.5625-0.69922-1.5625-1.5625s0.69922-1.5625 1.5625-1.5625 1.5625 0.69922 1.5625 1.5625-0.69922 1.5625-1.5625 1.5625zm53.125-6.25c-2.5859 0-4.6875 2.1016-4.6875 4.6875s2.1016 4.6875 4.6875 4.6875 4.6875-2.1016 4.6875-4.6875-2.1016-4.6875-4.6875-4.6875zm0 6.25c-0.86328 0-1.5625-0.69922-1.5625-1.5625s0.69922-1.5625 1.5625-1.5625 1.5625 0.69922 1.5625 1.5625-0.69922 1.5625-1.5625 1.5625zm-24.543-34.832c0.60938 0.60938 1.5977 0.60938 2.2109 0l0.45703-0.45703v10.289h-6.25c-0.86328 0-1.5625 0.69922-1.5625 1.5625v6.25c0 0.86328 0.69922 1.5625 1.5625 1.5625h40.625c0.86328 0 1.5625-0.69922 1.5625-1.5625v-6.25c0-0.86328-0.69922-1.5625-1.5625-1.5625h-6.25v-10.289l0.45703 0.45703c0.30469 0.30469 0.70312 0.45703 1.1055 0.45703 0.39844 0 0.80078-0.15234 1.1055-0.45703l4.6875-4.6875c0.60938-0.60938 0.60938-1.5977 0-2.2109l-20.312-20.312c-0.60938-0.60938-1.5977-0.60938-2.2109 0l-20.312 20.312c-0.60938 0.60938-0.60938 1.5977 0 2.2109zm35.48 16.082h-37.5v-3.125h37.5zm-14.062-6.25h-9.375v-7.8125c0-2.5859 2.1016-4.6875 4.6875-4.6875s4.6875 2.1016 4.6875 4.6875zm6.25 0h-3.125v-7.8125c0-4.3086-3.5039-7.8125-7.8125-7.8125s-7.8125 3.5039-7.8125 7.8125v7.8125h-3.125v-13.414l10.938-10.938 10.938 10.938zm-10.938-33.727 18.102 18.102-2.4766 2.4766-14.52-14.52c-0.30469-0.30469-0.70703-0.45703-1.1055-0.45703s-0.80078 0.15234-1.1055 0.45703l-14.52 14.52-2.4766-2.4766zm17.188-19.398h-34.375c-6.0312 0-10.938 4.9062-10.938 10.938v17.188h-6.8164c-5.9258 0-11.25 3.75-13.242 9.332l-4.1094 11.504c-0.22266 0.62109-0.8125 1.0391-1.4727 1.0391h-4.0469c-4.3086 0-7.8125 3.5039-7.8125 7.8125v18.75c0 0.86328 0.69922 1.5625 1.5625 1.5625h7.9258c0.76172 5.293 5.3242 9.375 10.824 9.375s10.062-4.082 10.824-9.375h31.477c0.76172 5.293 5.3242 9.375 10.824 9.375s10.062-4.082 10.824-9.375h7.9258c0.86328 0 1.5625-0.69922 1.5625-1.5625v-65.625c0-6.0312-4.9062-10.938-10.938-10.938zm-34.375 3.125h34.375c3.7734 0 6.9297 2.6875 7.6562 6.25h-49.688c0.72656-3.5625 3.8828-6.25 7.6562-6.25zm42.188 65.625h-9.543c-1.9727-1.9297-4.6719-3.125-7.6445-3.125s-5.6719 1.1953-7.6445 3.125h-25.168v-56.25h50zm-70.312-15.625h17.188v3.125h-4.6875c-0.86328 0-1.5625 0.69922-1.5625 1.5625s0.69922 1.5625 1.5625 1.5625h4.6875v9.375h-9.543c-1.9727-1.9297-4.6719-3.125-7.6445-3.125-0.53125 0-1.0508 0.039062-1.5625 0.11328v-11.051c0-0.86328 0.69922-1.5625 1.5625-1.5625zm17.188-3.125h-6.25v-4.6875c0-0.86328-0.69922-1.5625-1.5625-1.5625h-5.3984l0.87109-2.9102c0.59766-1.9961 2.4023-3.3398 4.4883-3.3398h7.8516zm-14.148-3.125h4.7734v3.125h-5.7109zm6.8398 25h33.363c-0.46094 0.97266-0.78516 2.0234-0.94531 3.125h-31.473c-0.16016-1.1016-0.48047-2.1523-0.94531-3.125zm-13.918-21.859 4.1094-11.504c1.5508-4.3438 5.6914-7.2617 10.301-7.2617h6.8164v3.125h-7.8516c-3.4766 0-6.4844 2.2383-7.4844 5.5664l-3.0664 10.215c-1.9961 0.53906-3.4727 2.3633-3.4727 4.5312v11.996c-1.0977 0.52344-2.0977 1.2266-2.957 2.0664h-9.543v-6.25h4.6875c2.5859 0 4.6875-2.1016 4.6875-4.6875v-4.7344c1.7109-0.23828 3.1836-1.4062 3.7734-3.0625zm-8.4609 3.1094h1.5625v4.6875c0 0.86328-0.69922 1.5625-1.5625 1.5625h-4.6875v-1.5625c0-2.5859 2.1016-4.6875 4.6875-4.6875zm-4.6875 18.75h7.3086c-0.46094 0.97266-0.78516 2.0234-0.94531 3.125h-6.3633zm17.188 12.5c-4.3086 0-7.8125-3.5039-7.8125-7.8125s3.5039-7.8125 7.8125-7.8125 7.8125 3.5039 7.8125 7.8125-3.5039 7.8125-7.8125 7.8125zm53.125 0c-4.3086 0-7.8125-3.5039-7.8125-7.8125s3.5039-7.8125 7.8125-7.8125 7.8125 3.5039 7.8125 7.8125-3.5039 7.8125-7.8125 7.8125zm17.188-9.375h-6.3633c-0.16016-1.1016-0.48047-2.1523-0.94531-3.125h7.3086z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span class="block mt-2 font-medium text-primary transition-colors duration-200 group-hover:text-primary-light h-10 text-xs sm:text-sm leading-tight">Kraustymas</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="w-[110px] flex-none snap-always snap-center">
                        <button class="inline-block p-4 rounded-t-lg transition-all duration-200 hover:bg-gray-50 group"
                                id="dashboard-styled-tab" data-tabs-target="#styled-sodininkyste" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            <div class="w-14 h-14 mx-auto relative flex items-center justify-center transition-transform duration-200 transform group-hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0" class="w-full h-full text-gray-600 group-hover:text-primary-light" aria-hidden="true" fill="currentColor">
                                    <path d="m90.742 18.754c0.375-0.59375 0.68359-1.2344 0.92187-1.9102 0.82422-2.3633 0.67969-4.9102-0.41016-7.1641l-1.3594-2.8125c-1.5547-3.2227-4.8711-5.3047-8.4492-5.3047-1.418 0-2.7852 0.3125-4.0703 0.93359-4.6562 2.2461-6.6133 7.8633-4.3672 12.52l1.3594 2.8125c1.1406 2.3672 3.2344 4.1172 5.6875 4.8789-2.1094 1.7539-4.0664 3.6953-5.1992 4.8633l-14.504-11.602c-0.27734-0.22266-0.62109-0.34375-0.97656-0.34375h-4.6875c-0.52344 0-1.0117 0.26172-1.3008 0.69531l-3.125 4.6875c-0.26953 0.40625-0.33594 0.91406-0.17969 1.375 0.15625 0.46094 0.52344 0.82031 0.98438 0.97656l1.6016 0.53516-1.5391 7.3789c-1.6406 0.14844-3.0391 1.1484-3.75 2.5508l-19.312-2.3438c-0.47656-0.058594-0.95312 0.10547-1.293 0.44531l-4.9453 4.9375c-0.42969 0.42969-0.57031 1.0664-0.36719 1.6367 0.10937 0.30078 0.30469 0.55078 0.55078 0.73047-2.7578 0.64062-4.8242 3.125-4.8242 6.082 0 0.75781 0.13672 1.5 0.39844 2.1953-2.0898 1.0195-3.5234 3.1719-3.5234 5.6172 0 0.17969 0.011719 0.35547 0.023438 0.53125-0.38281 0.42969-0.70703 0.91406-0.95703 1.4297-0.69141-0.26172-1.4336-0.39844-2.1914-0.39844-3.4453 0-6.25 2.8047-6.25 6.25 0 0.75781 0.13672 1.5 0.39844 2.1953-2.0898 1.0195-3.5234 3.1719-3.5234 5.6172 0 2.2852 1.25 4.3516 3.1758 5.4414-0.035156 0.26562-0.050781 0.53516-0.050781 0.80859 0 3.4453 2.8047 6.25 6.25 6.25 0.75781 0 1.5-0.13672 2.1953-0.39844 1.0195 2.0898 3.1719 3.5234 5.6172 3.5234s4.5977-1.4336 5.6172-3.5234c0.69531 0.26172 1.4414 0.38672 2.1953 0.39063v12.508c0 0.86328-0.69922 1.5625-1.5625 1.5625s-1.5625 0.69922-1.5625 1.5625 0.69922 1.5625 1.5625 1.5625h12.5c0.86328 0 1.5625-0.69922 1.5625-1.5625s-0.69922-1.5625-1.5625-1.5625-1.5625-0.69922-1.5625-1.5625v-11.852l4.1406-4.1406c0.66016 0.23828 1.3672 0.36719 2.1094 0.36719 0.75781 0 1.5-0.13672 2.1953-0.39844 1.0195 2.0898 3.1719 3.5234 5.6172 3.5234s4.5977-1.4336 5.6172-3.5234c0.69531 0.26172 1.4375 0.39844 2.1953 0.39844 3.4453 0 6.25-2.8047 6.25-6.25 0-0.27344-0.015625-0.54297-0.050781-0.80859 1.9258-1.0898 3.1758-3.1562 3.1758-5.4414 0-2.4453-1.4336-4.5977-3.5234-5.6172 0.26172-0.69531 0.39844-1.4375 0.39844-2.1953 0-3.4453-2.8047-6.25-6.25-6.25-0.75781 0-1.5 0.13672-2.1953 0.39844-0.91797-1.875-2.7461-3.2188-4.8789-3.4727l1.6523-7.9375c1.4922-0.26953 2.7383-1.2422 3.3828-2.5625l6.7461 0.82031c-0.011719 0.082031-0.019531 0.16797-0.019531 0.25391v1.5625c0 0.67188 0.42969 1.2695 1.0703 1.4844 0 0 13.125 3.0703 17.68 3.832v25.934c0 0.074219 0.003906 0.14844 0.015625 0.22266l2.9844 20.898-3.8672 2.5781c-0.57422 0.38281-0.82812 1.0938-0.62891 1.7539 0.19922 0.66016 0.80859 1.1094 1.4961 1.1094h10.938c0.86328 0 1.5625-0.69922 1.5625-1.5625v-24.711c0.81641-2.1367 4.6875-12.465 4.6875-15.914v-29.688c0-4.2695-3.4414-7.7461-7.6953-7.8086zm-8.1758 17.184c0.082032-0.054688 0.16406-0.10547 0.24609-0.15625v0.15625zm0.60938-11.727c-0.23438 0.74219-0.36328 1.5312-0.36328 2.3516v5.4531c-0.60156 0.42578-1.5898 1.1016-2.7148 1.7773l-1.7617-5.2891c1.3242-1.3086 3.0938-2.9531 4.8398-4.293zm-4.4414-18.898c0.85547-0.41406 1.7695-0.625 2.7109-0.625 2.3867 0 4.5977 1.3867 5.6328 3.5352l1.3594 2.8125c0.66016 1.3672 0.79688 2.8906 0.40625 4.3438l-1.6445-0.80469c0.19922-0.92969 0.28516-2.1719-0.21094-3.3516-0.34375-0.82031-1.1133-1.9258-2.8242-2.5312-0.92187-0.32812-1.8438-0.21484-2.5898 0.3125-0.16406 0.11719-0.31641 0.25-0.45312 0.39844-0.20312-0.35156-0.53906-0.61328-0.9375-0.72266-0.49219-0.13672-1.0195-0.023438-1.4141 0.30469-1.0312 0.85547-1.3516 1.6602-1.5469 2.1406-0.015625 0.042969-0.039062 0.09375-0.054687 0.13672-0.65234 0.42188-1.2734 0.66016-1.8789 0.72656-0.44922-2.6758 0.88281-5.4414 3.4453-6.6758zm-1.5508 11.156-0.73438-1.5156c0.85156-0.20703 1.7031-0.59375 2.543-1.1523 0.11328-0.078125 0.21875-0.15625 0.30859-0.23828l0.47656 1.3516c0.25391 0.71875 0.98438 1.1484 1.7383 1.0234 0.75-0.12891 1.3008-0.77734 1.3008-1.5391 0-1.0039 0.22266-2.2109 0.47266-2.6914 0.55078 0.23047 0.73047 0.51953 0.81641 0.72656 0.32812 0.76562-0.058594 1.9531-0.21484 2.3047-0.35938 0.77344-0.035156 1.6914 0.73047 2.0625l2.6836 1.3086c-0.50391 0.51953-1.1016 0.95312-1.7734 1.2773-0.85547 0.41406-1.7695 0.625-2.7109 0.625-2.3906-0.007813-4.6016-1.3945-5.6367-3.543zm-21.66 2.2812h3.3047l15.195 12.156c0.54297 0.43359 1.2891 0.44922 1.8438 0.078125l1.6523 4.9531h-3.4336l-13.605-13.605c-0.29297-0.29297-0.69141-0.45703-1.1055-0.45703h-2.8711l-0.25781-0.085938c-0.039063-0.69141-0.53125-1.2969-1.2383-1.4453-0.17969-0.039062-0.36328-0.039062-0.53516-0.015625zm0.23437 6.1719c0.16016 0.054687 0.32813 0.078125 0.49219 0.078125h2.4766l10.156 10.156-0.78125 0.78125h-2.4766c-0.13281 0-0.26172 0.019531-0.38672 0.050781l-9.1094-1.1055c-0.27344-1.1758-0.98828-2.1875-1.9648-2.8398l1.4922-7.1562zm-8.4805 24.863c0 0.007813-0.003906 0.011719-0.003906 0.019532l-1.7734 8.5117-2.5898 1.293 1.4297-6.0742v-0.007812l3.4766-14.777c0.39844 0.52734 0.90625 0.96875 1.4883 1.293zm-7.5938 9.8945c-0.40234-0.53906-0.62109-1.1914-0.62109-1.8672 0-1.2148 0.69922-2.2695 1.7148-2.7852zm-11.234-25.012 16.645 2.0195-0.39844 1.6992-9.2852-0.85156c-1.1133-0.99219-2.5742-1.5977-4.1602-1.5977-1.1836 0-2.2969 0.33984-3.2461 0.92188l-1.6016-0.14844zm-8.375 15.344c0.59375-0.042969 1.1133-0.42188 1.332-0.97656 0.22266-0.55469 0.10938-1.1836-0.28906-1.6289-0.51953-0.57422-0.80469-1.3164-0.80469-2.0938 0-1.7227 1.4023-3.125 3.125-3.125 0.77344 0 1.5195 0.28516 2.0938 0.80469 0.44141 0.39844 1.0742 0.51172 1.6289 0.28906 0.55469-0.22266 0.93359-0.73828 0.97656-1.332 0.12109-1.6172 1.4883-2.8867 3.1133-2.8867s2.9922 1.2695 3.1133 2.8867c0.042969 0.59375 0.42188 1.1133 0.97656 1.332 0.55469 0.22266 1.1836 0.10938 1.6289-0.28906 0.57422-0.51953 1.3164-0.80469 2.0938-0.80469 1.7227 0 3.125 1.4023 3.125 3.125 0 0.77344-0.28516 1.5195-0.80469 2.0938-0.39844 0.44141-0.51172 1.0742-0.28906 1.6289 0.16406 0.41016 0.49219 0.72266 0.89062 0.875l-0.39453 1.6836c-3.168 0.30078-5.6523 2.9766-5.6523 6.2188 0 0.75781 0.13672 1.5 0.39844 2.1953-1.9648 0.96094-3.3477 2.9258-3.5078 5.1875-0.47656 0.27734-1.0195 0.42969-1.5781 0.42969-1.625 0-2.9922-1.2695-3.1133-2.8867-0.042969-0.59375-0.42188-1.1133-0.97656-1.332-0.55469-0.22266-1.1836-0.10938-1.6289 0.28906-0.57422 0.51953-1.3164 0.80469-2.0938 0.80469-1.7227 0-3.125-1.4023-3.125-3.125 0-0.39453 0.074219-0.78516 0.21875-1.1523 0.16406-0.41406 0.14453-0.87891-0.054688-1.2734-0.19922-0.39844-0.55859-0.69141-0.98828-0.80859-1.3555-0.37109-2.3008-1.6094-2.3008-3.0156 0-1.625 1.2695-2.9922 2.8867-3.1133zm15.902 21.176-0.039062 0.039062v-0.19141c0.015625 0.011719 0.035156 0.023438 0.050781 0.03125-0.003906 0.039063-0.007812 0.082032-0.011719 0.12109zm-11.508 6.1328c-0.44141-0.39844-1.0742-0.51172-1.6289-0.28906-0.55469 0.22266-0.93359 0.73828-0.97656 1.332-0.12109 1.6172-1.4883 2.8867-3.1133 2.8867s-2.9922-1.2695-3.1133-2.8867c-0.042969-0.59375-0.42188-1.1133-0.97656-1.332-0.55469-0.22266-1.1836-0.10938-1.6289 0.28906-0.57422 0.51953-1.3203 0.80469-2.0938 0.80469-1.7227 0-3.125-1.4023-3.125-3.125 0-0.39453 0.074219-0.78516 0.21875-1.1523 0.16406-0.41406 0.14453-0.87891-0.054688-1.2734-0.19922-0.39844-0.55859-0.69141-0.98828-0.80859-1.3555-0.37109-2.3008-1.6094-2.3008-3.0156 0-1.625 1.2695-2.9922 2.8867-3.1133 0.59375-0.042969 1.1133-0.42188 1.332-0.97656 0.22266-0.55469 0.10938-1.1836-0.28906-1.6289-0.51953-0.57422-0.80469-1.3203-0.80469-2.0938 0-1.7227 1.4023-3.125 3.125-3.125 0.77344 0 1.5195 0.28516 2.0938 0.80469 0.44141 0.39844 1.0742 0.51172 1.6289 0.28906 0.55469-0.22266 0.93359-0.73828 0.97656-1.332 0.007812-0.089844 0.019531-0.17969 0.035156-0.26953 0.44922 0.5 0.97656 0.92969 1.5703 1.2656-0.039063 0.26172-0.054688 0.53125-0.054688 0.80469 0 3.4453 2.8047 6.25 6.25 6.25 0.75781 0 1.5-0.13672 2.1953-0.39844 0.24609 0.50781 0.5625 0.97266 0.92969 1.3906v11.508c-0.77344 0-1.5195-0.28516-2.0938-0.80469zm8.8008 2.8242c-0.29297 0.29297-0.45703 0.69141-0.45703 1.1055v12.5c0 0.54688 0.09375 1.0742 0.26953 1.5625h-3.6602c0.17188-0.48828 0.26953-1.0156 0.26953-1.5625l-0.003906-25.203c0.5 0.13281 1.0234 0.20312 1.5625 0.20312 0.53125 0 1.0547-0.070312 1.5625-0.19922v6.4492c0 0.63281 0.37891 1.2031 0.96484 1.4453 0.19531 0.078126 0.39453 0.11719 0.59766 0.11719 0.40625 0 0.80469-0.16016 1.1055-0.45703l1.2266-1.2266c0.21094 0.38672 0.46484 0.74609 0.75 1.0781zm19.844-25.695c0.042969 0.59375 0.42188 1.1133 0.97656 1.332 0.55469 0.22266 1.1836 0.10938 1.6289-0.28906 0.57422-0.51953 1.3164-0.80469 2.0938-0.80469 1.7227 0 3.125 1.4023 3.125 3.125 0 0.77344-0.28516 1.5195-0.80469 2.0938-0.39844 0.44141-0.51172 1.0742-0.28906 1.6289 0.22266 0.55469 0.73828 0.93359 1.332 0.97656 1.6172 0.12109 2.8867 1.4883 2.8867 3.1133 0 1.4062-0.94531 2.6445-2.3008 3.0156-0.42969 0.11719-0.78906 0.41016-0.98828 0.80859-0.19922 0.39844-0.21875 0.86328-0.054688 1.2734 0.14453 0.36719 0.21875 0.75391 0.21875 1.1523 0 1.7227-1.4023 3.125-3.125 3.125-0.77344 0-1.5195-0.28516-2.0938-0.80469-0.44141-0.39844-1.0742-0.51172-1.6289-0.28906-0.55469 0.22266-0.93359 0.73828-0.97656 1.332-0.12109 1.6172-1.4883 2.8867-3.1133 2.8867s-2.9922-1.2695-3.1133-2.8867c-0.042969-0.59375-0.42188-1.1133-0.97656-1.332-0.55469-0.22266-1.1836-0.10938-1.6289 0.28906-0.57422 0.51953-1.3164 0.80469-2.0938 0.80469-1.7227 0-3.125-1.4023-3.125-3.125 0-0.39453 0.074219-0.78516 0.21875-1.1523 0.16406-0.41406 0.14453-0.87891-0.054688-1.2734-0.19922-0.39844-0.55859-0.69141-0.98828-0.80859-1.3555-0.37109-2.3008-1.6094-2.3008-3.0156 0-1.625 1.2695-2.9922 2.8867-3.1133 0.082031-0.007813 0.16406-0.019531 0.24219-0.039063-0.007812 0.48047 0.20312 0.94922 0.58984 1.2539 0.28125 0.22266 0.625 0.33594 0.96875 0.33594 0.23828 0 0.47656-0.054688 0.69922-0.16406l6.25-3.125c0.42578-0.21484 0.73438-0.60938 0.83203-1.0781l1.6914-8.125c1.582 0.046876 2.8984 1.293 3.0156 2.8789zm-1.5508-16.949c-0.86328 0-1.5625-0.69922-1.5625-1.5625s0.69922-1.5625 1.5625-1.5625 1.5625 0.69922 1.5625 1.5625-0.69922 1.5625-1.5625 1.5625zm14.219 2.0508 0.48828-0.48828h2.4805c0.41406 0 0.8125-0.16406 1.1055-0.45703l0.55469-0.55469c0.22266 0.59375 0.79297 1.0156 1.4648 1.0156h17.492l-0.29688 2.9688c-0.082031 0.82422-0.60156 1.707-1.5547 1.7188-1.0898-0.066406-21.734-4.2031-21.734-4.2031zm21.719 7.3242c2.4492 0 4.418-1.9062 4.6797-4.5312l1.5625-15.625c0.085937-0.85938-0.53906-1.625-1.3984-1.7109-0.85547-0.085937-1.625 0.53906-1.7109 1.3984l-0.95312 9.5312h-3.7422v-9.375c0-2.5859 2.1016-4.6875 4.6875-4.6875s4.6875 2.1016 4.6875 4.6875v25h-10.938v-5.1133c1.6367 0.25781 2.8125 0.42578 3.125 0.42578zm-1.0898 48.438 0.39453-0.26172c0.5-0.33203 0.76562-0.92578 0.67969-1.5195l-0.41406-2.9062h3.5547v4.6875zm4.3203-24c-0.070313 0.17969-0.10547 0.37109-0.10547 0.5625v15.625h-4l-2.25-15.734v-17.078h10.938v1.5625c0 2.3008-2.8125 10.461-4.582 15.062z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span class="block mt-2 font-medium text-primary transition-colors duration-200 group-hover:text-primary-light h-10 text-xs sm:text-sm leading-tight">Sodininkyste</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="w-[110px] flex-none snap-always snap-center">
                        <button class="inline-block p-4 rounded-t-lg transition-all duration-200 hover:bg-gray-50 group"
                                id="dashboard-styled-tab" data-tabs-target="#styled-fitnesas" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            <div class="w-14 h-14 mx-auto relative flex items-center justify-center transition-transform duration-200 transform group-hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0" class="w-full h-full text-gray-600 group-hover:text-primary-light" aria-hidden="true" fill="currentColor">
                                    <path d="m22.875 72.363-1.3008 0.14453c-0.33203 0.035157-8.1836 0.96484-11.816 6.4297-3.6289 5.4648-1.4414 13.062-1.3477 13.387l0.36719 1.2539 1.3008-0.14453c0.33203-0.035156 8.1875-0.96484 11.816-6.4297 3.6289-5.4648 1.4453-13.066 1.3516-13.387zm-3.5742 12.91c-2.0312 3.0586-6.0742 4.332-8.1914 4.8047-0.38672-2.1328-0.78125-6.3359 1.2578-9.4102 2.0391-3.0742 6.0742-4.3281 8.1953-4.8047 0.38281 2.1367 0.77344 6.3359-1.2617 9.4102zm2.6602-53.848c-2.2266-1.5586-5.0508-1.9922-7.6445-1.168-0.90234 0.32813-1.7422 0.82031-2.4688 1.4492l-1.3086-3.8633c-0.27344-0.81641-1.1602-1.2578-1.9805-0.98047-0.81641 0.27734-1.2539 1.1641-0.98047 1.9805l1.3086 3.8633c-0.96094-0.058593-1.9258 0.058594-2.8438 0.34766-2.5586 0.91797-4.543 2.9766-5.3633 5.5703-0.92969 2.7773-0.90625 5.7852 0.074218 8.5469 1.7227 5.082 5.9844 8.4297 10.238 8.4297 0.86328 0 1.7188-0.14062 2.5352-0.41797 1.4688-0.5 2.7578-1.4141 3.7227-2.6289 1.5039 0.37891 3.082 0.31641 4.5508-0.17578 2.5586-0.91797 4.5391-2.9766 5.3594-5.5703 1.8242-5.7109-0.28516-11.949-5.1992-15.383zm2.2578 14.34c-0.50781 1.6836-1.7734 3.0352-3.418 3.6562-1.1836 0.375-2.4609 0.32031-3.6094-0.15625l-1.2148-0.47266-0.67578 1.1133c-0.62109 1.0742-1.6055 1.8945-2.7734 2.3125-3.3555 1.1406-7.3008-1.582-8.8125-6.0469-0.75391-2.0977-0.78516-4.3828-0.085938-6.5 0.50781-1.6836 1.7695-3.0352 3.418-3.6523 0.49219-0.16797 1.0117-0.25391 1.5312-0.25 0.71094 0.003907 1.4141 0.14062 2.0781 0.39844l1.2148 0.46875 0.67969-1.1094c0.62109-1.0742 1.6016-1.8945 2.7695-2.3125 1.6836-0.50391 3.5078-0.19922 4.9375 0.82812 3.707 2.6445 5.3047 7.3672 3.9609 11.723zm74.82-7.3203-1.543-2.1992 1.125-0.78906-0.003906-0.003906c0.70703-0.49609 0.87891-1.4688 0.37891-2.1758-0.49609-0.70703-1.4727-0.875-2.1758-0.37891l-1.125 0.78906-1.543-2.1992v-0.003906c-0.8125-1.1641-2.0586-1.9531-3.4609-2.1836-1.3711-0.24219-2.7852 0.085938-3.9141 0.91016-1.1523 0.80078-1.9375 2.0312-2.1836 3.4102-0.25781 1.3867 0.054688 2.8164 0.87109 3.9648l1.543 2.1992-8.4219 5.918-1.543-2.1992c-0.80469-1.1484-2.0312-1.9336-3.4141-2.1797-1.3867-0.25781-2.8164 0.054687-3.9648 0.86719-1.1523 0.80078-1.9375 2.0273-2.1836 3.4102-0.25781 1.3828 0.054687 2.8125 0.86719 3.9648l1.5508 2.2109-1.1055 0.78906c-0.70312 0.5-0.86719 1.4766-0.36719 2.1758 0.5 0.70312 1.4766 0.86719 2.1797 0.36719l1.0898-0.77734 1.5664 2.2305 0.003906 0.003906c0.79688 1.1719 2.0352 1.9766 3.4297 2.2305 1.3945 0.25391 2.8359-0.066406 3.9961-0.88281 1.1602-0.81641 1.9414-2.0664 2.1719-3.4688 0.23438-1.3984-0.10938-2.832-0.94531-3.9805l-1.543-2.1992 8.4258-5.918 1.5547 2.2188c1.0156 1.3945 2.6367 2.2188 4.3633 2.2148 1.9766 0.003906 3.7891-1.0977 4.6992-2.8516 0.90625-1.7578 0.76172-3.8711-0.38281-5.4844zm-20.188 16.84c-0.98047 0.69141-2.3359 0.46094-3.0312-0.51562l-4.9141-7c-0.33203-0.46875-0.45703-1.0508-0.35156-1.6133 0.10156-0.57031 0.42578-1.082 0.89844-1.4141 0.35938-0.25 0.78516-0.38672 1.2227-0.38672 0.13281 0 0.26562 0.011719 0.39453 0.035156 0.57031 0.10156 1.0781 0.42578 1.4141 0.90234l4.875 6.9609-0.003906-0.003906c0.33594 0.46875 0.47266 1.0547 0.37891 1.625-0.097656 0.56641-0.41406 1.0742-0.88281 1.4102zm17.113-12.02c-0.99609 0.68359-2.3477 0.45312-3.0664-0.51562l-2.4336-3.4727v-0.007813l-0.007813-0.007812-2.4375-3.4727c-0.32812-0.46875-0.45703-1.0508-0.35156-1.6133 0.10547-0.57812 0.4375-1.0938 0.92188-1.4258 0.35938-0.26172 0.79297-0.39844 1.2344-0.39844 0.11719 0 0.23438 0.007813 0.35156 0.03125 0.57812 0.09375 1.0898 0.41797 1.4258 0.89844l4.875 6.9531c0.69141 0.98047 0.46484 2.3359-0.51172 3.0312zm-20.977 35.602c-5.2383-2.4648-9.5625-6.7539-12.801-12.629-1.8867-4.2109-3.9609-13.969-3.9883-13.969l-0.48438-20.75h0.003906c2.9414-1.1641 5.6992-2.75 8.1914-4.6992 0.046875-0.035156 0.09375-0.070312 0.13672-0.10547 5.6367-4.5664 10.285-10.23 13.668-16.652 1.25-2.6055 0.17969-5.7344-2.4062-7.0312-2.5898-1.293-5.7344-0.27344-7.0742 2.2891-2.6523 4.9062-6.2227 9.2578-10.52 12.816-1.8906 0.69922-3.8438 1.2227-5.832 1.5625-0.40625-0.34375-0.83594-0.65625-1.2891-0.93359 0.65625-0.38281 1.2695-0.83594 1.8242-1.3555 1.9375-1.8516 3.0625-4.3945 3.125-7.0742 0.058593-2.6758-0.94531-5.2695-2.7969-7.207-2.8203-2.9531-7.1406-3.918-10.949-2.4414s-6.3555 5.0977-6.4492 9.1797c-0.070312 2.6836 0.9375 5.2773 2.793 7.2109 0.5 0.51953 1.0508 0.98047 1.6484 1.3828-0.50781 0.28906-0.98828 0.62109-1.4414 0.98828-2.0625-0.30078-4.0391-1.0352-5.793-2.1602-3.5156-3.1484-5.8828-7.3789-6.7305-12.02-0.33984-2.9102-2.9727-4.9961-5.8828-4.6523-2.9102 0.33984-4.9922 2.9727-4.6523 5.8828 0.21484 1.8633 2.5586 18.121 19.086 24.973l0.50391 21.227-0.019531 0.51562c-0.33594 9.0859-0.42969 15.301-0.26172 18.016-0.007812 7.668 1.9102 15.219 5.5781 21.953 0.042969 0.09375 0.09375 0.17969 0.15234 0.26172 0.90234 1.5859 1.9219 3.1055 3.0469 4.543 1.8203 2.2969 5.1562 2.6797 7.4492 0.85938 1.1016-0.87109 1.8086-2.1484 1.9727-3.5469 0.16016-1.3945-0.24219-2.8008-1.1133-3.9023-2.7031-3.5078-4.5742-7.5898-5.4688-11.926-0.16406-4.2773 0-8.5586 0.48438-12.812 2.2852 4.2305 5.2188 8.0703 8.6953 11.391 2.0742 2.5469 4.4609 4.8242 7.1055 6.7734 0.09375 0.089843 0.19922 0.16406 0.31641 0.22656 1.7734 1.3125 3.668 2.4531 5.6602 3.4102 0.70703 0.33203 1.4766 0.5 2.2578 0.5h0.015625c2.0469-0.015626 3.9023-1.1992 4.7812-3.043 0.59766-1.2734 0.66797-2.7305 0.19141-4.0547-0.47656-1.3242-1.4609-2.4062-2.7344-3.0039zm-1.9688-72.133c0.53516-1.0781 1.8438-1.5156 2.9219-0.98047 1.0742 0.53516 1.5156 1.8438 0.98047 2.9219-2.8359 5.3789-6.6133 10.207-11.152 14.254-0.69531-1.3281-1.6055-2.5312-2.6914-3.5664 3.9922-3.6289 7.3555-7.8945 9.9414-12.629zm-32.555 3.1992h0.003906c0.085938-3.7852 3.1797-6.8125 6.9688-6.8125h0.16406c2.8203 0.066406 5.3242 1.8242 6.3438 4.4531 1.0195 2.6328 0.35547 5.6172-1.6836 7.5664-1.3477 1.2695-3.1328 1.9609-4.9805 1.9258-1.8516-0.039062-3.6094-0.81641-4.8867-2.1523-1.2773-1.3398-1.9727-3.1328-1.9258-4.9805zm-14.641 9.3984 0.003906 0.003907c-2.8281-3.9102-4.6914-8.4336-5.4336-13.199-0.12891-1.1914 0.73047-2.2617 1.918-2.4023 0.085938-0.007813 0.16797-0.015625 0.25-0.015625 1.0977 0.019531 2.0195 0.83594 2.1641 1.9258 0.63281 3.582 2.0703 6.9766 4.1992 9.9297-1.1992 1.1094-2.2383 2.375-3.0977 3.7656zm12.633 9.5938 0.007813 0.003907c-4.0078-1.4922-7.6094-3.9062-10.516-7.0469 0.77734-1.4414 1.7695-2.75 2.9492-3.8828 0.53906 0.60547 1.1094 1.1797 1.7109 1.7266 2.4023 1.6133 5.1602 2.6172 8.0391 2.9219l0.72266 0.085937 0.53125-0.5c1.4023-1.3477 3.2852-2.082 5.2266-2.0391 1.9453 0.042969 3.793 0.85547 5.1367 2.2617l0.5625 0.57031 0.78906-0.12109c2.3281-0.36328 4.6211-0.94531 6.8438-1.7383 1.2031 1.0234 2.1523 2.3125 2.7695 3.7695-2.3203 1.707-4.8828 3.0586-7.6016 4.0078l-1.0898 0.36719 0.51172 20.965c-5.582-1.168-11.961-0.16797-15.09 0.48828l-0.51172-21.465zm12.777 64.418c0.74609 0.94141 0.58594 2.3086-0.35156 3.0586-0.94922 0.71875-2.3008 0.5625-3.0586-0.35156-0.58203-0.73438-1.125-1.5-1.6445-2.2812l-0.003907-0.003906c1.4766-0.30859 2.875-0.91797 4.1094-1.7891 0.31641 0.45313 0.60938 0.93359 0.94922 1.3672zm14.34-11.562v-0.003906c-2.125-1.6797-4.0586-3.5898-5.7578-5.6992l-0.38281-0.36328c-4.207-4.1172-7.5703-9.0156-9.9023-14.422l-1.6719-3.7812-1.25 3.9414c-1.8867 5.9492-1.6016 16.152-1.4883 18.406 0.69922 3.3125 1.8828 6.5 3.5078 9.4688-1.2266 0.89844-2.6836 1.4336-4.1992 1.5352-3.1211-6.1562-4.7383-12.961-4.7266-19.863-0.10156-1.7539-0.13672-6.1719 0.25781-17.027 2.6992-0.60156 9.8203-1.8984 15.348-0.41406 0.57812 2.6211 2.3281 10.172 4.082 14.074 2.2148 4.1523 5.2539 7.8125 8.9297 10.75-0.62109 1.3398-1.5625 2.5078-2.7461 3.3945zm9.125 2.8086c-0.35938 0.75781-1.1211 1.2461-1.9609 1.2539-0.32812 0.03125-0.65625-0.042969-0.9375-0.21094-1.2344-0.58594-2.4336-1.25-3.5859-1.9883 1.1016-0.98047 2.0156-2.1523 2.6992-3.457 0.88672 0.55469 1.8008 1.0586 2.7422 1.5078 1.0859 0.51172 1.5547 1.8047 1.043 2.8945z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span class="block mt-2 font-medium text-primary transition-colors duration-200 group-hover:text-primary-light h-10 text-xs sm:text-sm leading-tight">Fitnesas</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="w-[110px] flex-none snap-always snap-center">
                        <button class="inline-block p-4 rounded-t-lg transition-all duration-200 hover:bg-gray-50 group"
                                id="dashboard-styled-tab" data-tabs-target="#styled-organizavimas" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            <div class="w-14 h-14 mx-auto relative flex items-center justify-center transition-transform duration-200 transform group-hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0" class="w-full h-full text-gray-600 group-hover:text-primary-light" aria-hidden="true" fill="currentColor">
                                    <path d="m89.301 19.027c-0.57812-0.76953-1.4922-1.2188-2.4531-1.2109h-3.3594v-3.7617c0-1.3008-0.72656-2.4883-1.8828-3.082-1.1562-0.58984-2.5469-0.48047-3.5977 0.28125-0.65625-0.79688-1.6328-1.2578-2.6641-1.2578s-2.0078 0.46094-2.6641 1.2578c-0.75781-0.55469-1.7109-0.76953-2.6367-0.60547-0.92578 0.16797-1.7422 0.70312-2.2617 1.4883-0.9375-0.58203-2.0977-0.67969-3.1172-0.26562-1.0195 0.41797-1.7812 1.293-2.0508 2.3633-5.2812-2.8008-11.176-4.2578-17.156-4.2344-8.707-0.078125-17.137 3.0508-23.684 8.7852-6.2227 5.3281-9.8398 13.086-9.9141 21.277v12.945h-0.70312c-0.29297 0-0.57422 0.11719-0.78516 0.32422-0.20703 0.21094-0.32422 0.49219-0.32422 0.78516v15.039c0 0.29297 0.11719 0.57812 0.32422 0.78516 0.21094 0.20703 0.49219 0.32422 0.78516 0.32422h3.3906v7.875l0.003906 0.003906c0.003907 4.7422 3.8477 8.5859 8.5898 8.5898h16.297c0.50781 1.9219 2.2461 3.2617 4.2344 3.2656h3.5703c2.4141 0 4.375-1.9609 4.375-4.375 0-2.418-1.9609-4.3789-4.375-4.3789h-3.5703c-1.9883 0.003906-3.7266 1.3438-4.2344 3.2656h-16.289c-3.5195-0.003907-6.3672-2.8516-6.3711-6.3672v-7.8789h2.5938c0.67578 3.7539 4.1016 6.3711 7.8984 6.0312 3.7969-0.33594 6.7109-3.5156 6.7109-7.3281v-14.656c-0.003907-4.0664-3.2969-7.3594-7.3633-7.3633-2.8516 0-5.4453 1.6484-6.6602 4.2266v-11.113c0-12.465 11.438-22.602 25.5-22.602v0.003906c6.1836-0.042969 12.199 2.0195 17.055 5.8477v8.8398c-0.003907 0.78125 0.15625 1.5508 0.47266 2.2617l1.6992 3.9062c0.19531 0.42969 0.29297 0.89844 0.28516 1.375v0.64453-0.003906c-0.95312 0.4375-1.5664 1.3867-1.5703 2.4375v4.2266c-3.6875 0.45703-6.4609 3.5898-6.4648 7.3086v14.656c0 3.8125 2.9102 6.9922 6.707 7.332 3.7969 0.33594 7.2266-2.2812 7.8984-6.0312h8.2109c0.29297 0 0.57812-0.11719 0.78516-0.32812 0.20703-0.20703 0.32422-0.48828 0.32422-0.78516v-15.035c0-0.29297-0.11719-0.57422-0.32422-0.78516-0.20703-0.20703-0.49219-0.32422-0.78516-0.32422h-0.69531v-2.2305h2.6836c1.4805-0.003906 2.6797-1.1992 2.6836-2.6758v-5.332c-0.003906-1.0508-0.61719-2.0039-1.5703-2.4375v-3.8438c-0.007812-0.55469 0.125-1.1016 0.39063-1.5898l2.7266-5.2227c0.46484-0.90234 0.99219-1.7695 1.5703-2.6016 1.1367-1.6094 1.918-3.4375 2.3008-5.3672 0.25781-0.92578 0.054687-1.9219-0.53906-2.6797zm-45.629 64.441h3.5703c1.1875 0 2.1523 0.96484 2.1523 2.1562 0 1.1875-0.96484 2.1523-2.1523 2.1523h-3.5703c-1.1914 0-2.1562-0.96484-2.1562-2.1523 0-1.1914 0.96484-2.1562 2.1562-2.1562zm-12.418-31.375c0.33203 0.69141 0.5 1.4492 0.5 2.2188v14.652c0 0.76562-0.16797 1.5273-0.5 2.2188-2.6875-2.4297-4.1641-5.9258-4.0352-9.5469-0.12891-3.6211 1.3477-7.1133 4.0352-9.543zm-9.7773 2.2188c0-1.9922 1.1445-3.8008 2.9453-4.6523 1.7969-0.84766 3.9258-0.58203 5.4609 0.68359-3.2227 2.8516-5.0117 6.9922-4.8828 11.293-0.12891 4.3047 1.6641 8.4414 4.8867 11.293-1.5352 1.2656-3.6641 1.5312-5.4609 0.68359-1.8008-0.84766-2.9453-2.6602-2.9453-4.6484zm-9.1992 0.91797h6.9805v12.816h-6.9805zm33.18-39.992c-7.1797-0.0625-14.133 2.5156-19.531 7.25-5.1406 4.4023-8.125 10.809-8.1914 17.574v12.945h-3.6562v-12.945c0-15.352 14.074-27.844 31.375-27.844l0.003906 0.003906c5.9805-0.023437 11.867 1.5312 17.055 4.5078v3.8008-0.003906c-5.0039-3.4727-10.961-5.3203-17.055-5.2891zm14.199 55.945c-0.33203-0.69141-0.50391-1.4531-0.5-2.2188v-14.652c-0.003906-0.76953 0.16797-1.5273 0.5-2.2188 2.6875 2.4297 4.1641 5.9219 4.0352 9.543 0.12891 3.6211-1.3438 7.1172-4.0312 9.5469zm9.7773-2.2188c0 1.9883-1.1484 3.8008-2.9453 4.6484-1.8008 0.84766-3.9258 0.58203-5.4609-0.68359 3.2227-2.8516 5.0156-6.9883 4.8867-11.293 0.12891-4.3008-1.6641-8.4414-4.8867-11.293 0.74609-0.61719 1.6562-1.0078 2.6172-1.1289 0.4375 0.94922 1.3867 1.5586 2.4336 1.5625h1.9336c0.91016 0.95312 1.418 2.2188 1.4219 3.5352zm1.3086-18.188h0.21094v0.41406c-0.0625-0.14062-0.13281-0.27734-0.21094-0.41406zm7.8945 17.27h-6.9805v-12.816h6.9805zm-1.8047-15.039h-3.6523v-2.2305h3.6523zm5.3672-4.9062c-0.003907 0.25-0.20703 0.45313-0.45703 0.45703h-15.66c-0.25391-0.003906-0.45703-0.20703-0.46094-0.45703v-5.332c0.003906-0.25391 0.20703-0.45703 0.46094-0.46094h15.656c0.25391 0.003906 0.45703 0.20703 0.46094 0.46094zm5.4922-26.961c-0.32031 1.6875-0.99609 3.2852-1.9844 4.6875-0.62891 0.89844-1.1992 1.8398-1.707 2.8164l-2.7266 5.2227c-0.42969 0.80859-0.65234 1.707-0.64453 2.6211v3.6016h-13.438v-0.39844c0.007813-0.78125-0.15234-1.5508-0.46875-2.2617l-1.6992-3.9062c-0.19531-0.43359-0.29297-0.89844-0.28906-1.375v-17.07c0-0.68359 0.55469-1.2344 1.2344-1.2344s1.2344 0.55078 1.2344 1.2344c0 0.61328 0.49609 1.1094 1.1094 1.1094s1.1133-0.49609 1.1133-1.1094c0-0.22266-0.023437-0.44141-0.066406-0.65625 0.042969-0.12109 0.0625-0.24219 0.066406-0.36719 0-0.68359 0.55078-1.2344 1.2305-1.2344 0.68359 0 1.2344 0.55078 1.2344 1.2344 0 0.61328 0.49609 1.1094 1.1094 1.1094s1.1133-0.49609 1.1133-1.1094c0-0.12891-0.007812-0.25781-0.023437-0.38281 0.015625-0.070313 0.023437-0.14453 0.023437-0.21875 0.019531-0.66406 0.5625-1.1953 1.2305-1.1953s1.2148 0.53125 1.2344 1.1953v0.60156c0 0.61328 0.5 1.1094 1.1133 1.1094 0.61328 0 1.1094-0.49609 1.1094-1.1094 0-0.67969 0.55078-1.2344 1.2344-1.2344 0.67969 0 1.2305 0.55469 1.2305 1.2344v7.9844c0 0.61328 0.5 1.1133 1.1133 1.1133 0.61328 0 1.1094-0.5 1.1094-1.1133v-2h3.3633c0.27344 0 0.52734 0.12891 0.69141 0.34375 0.16797 0.21484 0.22266 0.49609 0.14844 0.75781zm-28.047 19.938v-12.355c-0.003906-2.5703-2.0859-4.6562-4.6602-4.6602h-22.078c-2.5703 0.003906-4.6562 2.0898-4.6602 4.6602v12.355c0.003906 2.5703 2.0898 4.6523 4.6602 4.6562h8.4336l12.059 6.9648c0.34375 0.19922 0.76953 0.19922 1.1133 0s0.55469-0.5625 0.55469-0.96094v-6c2.543-0.046875 4.5742-2.1211 4.5781-4.6602zm-5.6836 2.4375v-0.003906c-0.61328 0.003906-1.1133 0.5-1.1133 1.1133v5.1914l-10.656-6.1562c-0.16797-0.09375-0.35938-0.14844-0.55469-0.14844h-8.7305c-1.3438 0-2.4336-1.0898-2.4375-2.4336v-12.355c0.003906-1.3438 1.0938-2.4336 2.4375-2.4375h22.078c1.3477 0.003906 2.4375 1.0938 2.4375 2.4375v12.355c0 1.3438-1.0898 2.4336-2.4375 2.4336zm-0.39453-12.199v-0.003906c0 0.61328-0.49609 1.1133-1.1133 1.1133h-17.016c-0.60156-0.019531-1.0781-0.51172-1.0781-1.1133s0.47656-1.0938 1.0781-1.1133h17.016c0.29688 0 0.57812 0.11719 0.78906 0.32812 0.20703 0.20703 0.32422 0.49219 0.32422 0.78516zm0 7.4141v-0.003907c0 0.61328-0.49609 1.1133-1.1133 1.1133h-17.016c-0.61328 0-1.1133-0.5-1.1133-1.1133 0-0.61328 0.5-1.1094 1.1133-1.1094h17.016c0.29688 0 0.57812 0.11719 0.78906 0.32422 0.20703 0.21094 0.32422 0.49219 0.32422 0.78906z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span class="block mt-2 font-medium text-primary transition-colors duration-200 group-hover:text-primary-light h-10 text-xs sm:text-sm leading-tight">Organizavimas</span>
                        </button>
                    </div>
                </li>
            </ul>
        </section>


            <section class="antialiased md:py-12 p-12">
                <!-- Valymas -->
                <div class="hidden" id="styled-valymas" role="tabpanel" aria-labelledby="valymas-tab">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Namų priežiūra ir valymas</h3>
                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                        @foreach($categories as $category)
                            @if($category['name'] === 'Namų priežiūra ir valymas')
                                @foreach($category['subcategories'] as $subcategory)
                                    <a href="{{ url('/search?subcategory=' . urlencode($subcategory['name'])) }}"
                                       class="flex items-center p-4 rounded-lg border border-gray-200 bg-white shadow-sm hover:shadow-md hover:border-primary-light/50 transition-all duration-200 group">
                                        <div class="flex-shrink-0 w-10 h-10 bg-primary-light/10 rounded-full flex items-center justify-center mr-4 group-hover:bg-primary-light/20">
                                            <!-- You can use an appropriate icon for each subcategory -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium text-gray-900 group-hover:text-primary-light">{{ $subcategory['name'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Kuryba -->
                <div class="hidden" id="styled-kuryba" role="tabpanel" aria-labelledby="kuryba-tab">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Kūrybinės Paslaugos</h3>
                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach($categories as $category)
                            @if($category['name'] === 'Kūrybinės Paslaugos')
                                @foreach($category['subcategories'] as $subcategory)
                                    <a href="{{ url('/search?subcategory=' . urlencode($subcategory['name'])) }}"
                                       class="flex items-center p-4 rounded-lg border border-gray-200 bg-white shadow-sm hover:shadow-md hover:border-primary-light/50 transition-all duration-200 group">
                                        <div class="flex-shrink-0 w-10 h-10 bg-primary-light/10 rounded-full flex items-center justify-center mr-4 group-hover:bg-primary-light/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                                                <path d="M8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium text-gray-900 group-hover:text-primary-light">{{ $subcategory['name'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Meistrai -->
                <div class="hidden" id="styled-meistrai" role="tabpanel" aria-labelledby="meistrai-tab">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Meistrai ir remontas</h3>
                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach($categories as $category)
                            @if($category['name'] === 'Meistrai ir remontas')
                                @foreach($category['subcategories'] as $subcategory)
                                    <a href="{{ url('/search?subcategory=' . urlencode($subcategory['name'])) }}"
                                       class="flex items-center p-4 rounded-lg border border-gray-200 bg-white shadow-sm hover:shadow-md hover:border-primary-light/50 transition-all duration-200 group">
                                        <div class="flex-shrink-0 w-10 h-10 bg-primary-light/10 rounded-full flex items-center justify-center mr-4 group-hover:bg-primary-light/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium text-gray-900 group-hover:text-primary-light">{{ $subcategory['name'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Kraustymas -->
                <div class="hidden" id="styled-kraustymas" role="tabpanel" aria-labelledby="kraustymas-tab">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Perkraustymo ir pakavimo paslaugos</h3>
                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach($categories as $category)
                            @if($category['name'] === 'Perkraustymo ir pakavimo paslaugos')
                                @foreach($category['subcategories'] as $subcategory)
                                    <a href="{{ url('/search?subcategory=' . urlencode($subcategory['name'])) }}"
                                       class="flex items-center p-4 rounded-lg border border-gray-200 bg-white shadow-sm hover:shadow-md hover:border-primary-light/50 transition-all duration-200 group">
                                        <div class="flex-shrink-0 w-10 h-10 bg-primary-light/10 rounded-full flex items-center justify-center mr-4 group-hover:bg-primary-light/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8z" />
                                                <path d="M12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium text-gray-900 group-hover:text-primary-light">{{ $subcategory['name'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Sodininkyste -->
                <div class="hidden" id="styled-sodininkyste" role="tabpanel" aria-labelledby="sodininkyste-tab">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Sodininkystės ir lauko paslaugos</h3>
                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach($categories as $category)
                            @if($category['name'] === 'Sodininkystės ir lauko paslaugos')
                                @foreach($category['subcategories'] as $subcategory)
                                    <a href="{{ url('/search?subcategory=' . urlencode($subcategory['name'])) }}"
                                       class="flex items-center p-4 rounded-lg border border-gray-200 bg-white shadow-sm hover:shadow-md hover:border-primary-light/50 transition-all duration-200 group">
                                        <div class="flex-shrink-0 w-10 h-10 bg-primary-light/10 rounded-full flex items-center justify-center mr-4 group-hover:bg-primary-light/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium text-gray-900 group-hover:text-primary-light">{{ $subcategory['name'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>


                <!-- fitnesas -->
                <div class="hidden" id="styled-fitnesas" role="tabpanel" aria-labelledby="fitnesas-tab">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Fitnesas ir Sveikatingumus</h3>
                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach($categories as $category)
                            @if($category['name'] === 'Fitnesas ir Sveikatingumus')
                                @foreach($category['subcategories'] as $subcategory)
                                    <a href="{{ url('/search?subcategory=' . urlencode($subcategory['name'])) }}"
                                       class="flex items-center p-4 rounded-lg border border-gray-200 bg-white shadow-sm hover:shadow-md hover:border-primary-light/50 transition-all duration-200 group">
                                        <div class="flex-shrink-0 w-10 h-10 bg-primary-light/10 rounded-full flex items-center justify-center mr-4 group-hover:bg-primary-light/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium text-gray-900 group-hover:text-primary-light">{{ $subcategory['name'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Organizavimas -->
                <div class="hidden" id="styled-organizavimas" role="tabpanel" aria-labelledby="organizavimas-tab">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Renginių Pagalba</h3>
                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach($categories as $category)
                            @if($category['name'] === 'Renginių Pagalba')
                                @foreach($category['subcategories'] as $subcategory)
                                    <a href="{{ url('/search?subcategory=' . urlencode($subcategory['name'])) }}"
                                       class="flex items-center p-4 rounded-lg border border-gray-200 bg-white shadow-sm hover:shadow-md hover:border-primary-light/50 transition-all duration-200 group">
                                        <div class="flex-shrink-0 w-10 h-10 bg-primary-light/10 rounded-full flex items-center justify-center mr-4 group-hover:bg-primary-light/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 14.094A5.973 5.973 0 004 15v1H1v-1a3 3 0 015-2.262z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium text-gray-900 group-hover:text-primary-light">{{ $subcategory['name'] }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>

        <!-- Skiriamoji juosta -->
        <div class="flex justify-center items-center space-x-2 mx-auto max-w-md ">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
        </div>

        <!-- kaip mes veikiame -->
        <section class="pt-8 pb-24 relative">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div class="w-full flex-col justify-start items-center lg:gap-12 gap-10 inline-flex">
                    <div class="w-full flex-col justify-start items-center gap-3 flex">
                        <h2 class="w-full text-center text-primary-light text-4xl font-bold font-manrope leading-normal">Kaip viskas veikia</h2>
                        <p class="w-full text-center text-gray-500 text-base font-normal leading-relaxed">MyApp Lietuva padeda jum rasti freelancerio pagalba naujovišku budu  <br/>Nesvarbu kokia jūsų problema, mūsų partneriai jums padės</p>
                    </div>
                    <div class="w-full justify-start items-center gap-4 flex md:flex-row flex-col">
                        <div class="grow shrink basis-0 flex-col justify-start items-center gap-2.5 inline-flex">
                            <div class="self-stretch flex-col justify-start items-center gap-0.5 flex">
                                <h3 class="self-stretch text-center text-primary-light text-4xl font-extrabold font-manrope leading-normal">1</h3>
                                <h4 class="self-stretch text-center text-primary text-xl font-semibold leading-8">Suraskite problemą atitinkančia kategoriją</h4>
                            </div>
                            <p class="self-stretch text-center text-gray-500 text-base font-normal leading-relaxed">Naudokites paieškos langeliu arba ieškokite tarp visų kategorijų, išsirinkite sau tinkamą.</p>
                        </div>
                        <svg class="md:flex hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5.50159 6L11.5018 12.0002L5.49805 18.004M12.5016 6L18.5018 12.0002L12.498 18.004" stroke="#266867" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="grow shrink basis-0 flex-col justify-start items-center gap-2.5 inline-flex">
                            <div class="self-stretch flex-col justify-start items-center gap-0.5 flex">
                                <h3 class="self-stretch text-center text-primary-light text-4xl font-extrabold font-manrope leading-normal">2</h3>
                                <h4 class="self-stretch text-center text-primary  text-xl font-semibold leading-8">Išsirinkite patinkantį freelancerį</h4>
                            </div>
                            <p class="self-stretch text-center text-gray-500 text-base font-normal leading-relaxed">Mes parinksime jums tinkamiausius freelancerius pagal vietove, įvertinimą ir paslaugos tipą.</p>
                        </div>
                        <svg class="md:flex hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5.50159 6L11.5018 12.0002L5.49805 18.004M12.5016 6L18.5018 12.0002L12.498 18.004" stroke="#266867" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="grow shrink basis-0 flex-col justify-start items-center gap-2.5 inline-flex">
                            <div class="self-stretch flex-col justify-start items-center gap-0.5 flex">
                                <h3 class="self-stretch text-center text-primary-light text-4xl font-extrabold font-manrope leading-normal">3</h3>
                                <h4 class="self-stretch text-center text-primary  text-xl font-semibold leading-8">Susisiekite su freelanceriu</h4>
                            </div>
                            <p class="self-stretch text-center text-gray-500 text-base font-normal leading-relaxed">Susisiekite ir susitarkite. O tada belieka tik laukti ! Po paslaugos nepamirškite palikti atsiliepimą.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skiriamoji juosta -->
        <div class="flex justify-center items-center space-x-2 mx-auto max-w-md my-8 mt-4">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
        </div>



        <h2 class="w-full text-center text-primary-light text-4xl font-bold font-manrope leading-normal mb-12">Patikimiausi Partneriai</h2>

        <!-- Karusele su profiliais -->
        <div class="flex flex-wrap justify-center gap-4 relative">
            <!-- Navigation Buttons -->
{{--            <div class="swiper-button-prev absolute left-4 top-1/2 transform -translate-y-1/2 z-10 text-gray-800 hover:bg-gray-300 p-3 rounded-full shadow-md cursor-pointer">--}}
{{--                &lt; <!-- Replace with an icon if needed -->--}}
{{--            </div>--}}
{{--            <div class="swiper-button-next absolute right-4 top-1/2 transform -translate-y-1/2 z-10 text-gray-800 hover:bg-gray-300 p-3 rounded-full shadow-md cursor-pointer">--}}
{{--                &gt; <!-- Replace with an icon if needed -->--}}
{{--            </div>--}}
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- First Card -->
                    <div class="swiper-slide">
                        <section class="border bg-neutral-100 p-4 rounded-lg max-w-full h-auto sm:h-64 min-h-[300px]">
                            <div class="mx-auto">
                                <div class="card md:flex max-w-lg">
                                    <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                                        <img class="object-cover rounded-full" src="https://tailwindflex.com/public/images/user.png">
                                    </div>
                                    <div class="flex-grow text-center md:text-left">
                                        <p class="font-bold">Medkirtys</p>
                                        <div class="flex items-center justify-center md:justify-start space-x-2">
                                            <h3 class="text-xl font-bold heading">Jonas Ponas</h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-yellow">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="..." />
                                            </svg>
                                            <span class="text-md text-gray-600">(4.9)</span>
                                        </div>
                                        <p class="mt-2 mb-3">Jonas yra profesionalus medzio apdailininkas galintis padeti jums ivairiausiais klausimais.</p>
                                        <div class="flex flex-wrap gap-2 mt-3">
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Perkraustymas</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Santechnika</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Medkirtys</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Second Card -->
                    <div class="swiper-slide">
                        <section class="border bg-neutral-100 p-4 rounded-lg max-w-full h-auto sm:h-64 min-h-[300px]">
                            <div class="mx-auto">
                                <div class="card md:flex max-w-lg">
                                    <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                                        <img class="object-cover rounded-full" src="https://tailwindflex.com/public/images/user.png">
                                    </div>
                                    <div class="flex-grow text-center md:text-left">
                                        <p class="font-bold">Medkirtys</p>
                                        <div class="flex items-center justify-center md:justify-start space-x-2">
                                            <h3 class="text-xl font-bold heading">Jonas Ponas</h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-yellow">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="..." />
                                            </svg>
                                            <span class="text-md text-gray-600">(4.9)</span>
                                        </div>
                                        <p class="mt-2 mb-3">Jonas yra profesionalus medzio apdailininkas...</p>
                                        <div class="flex flex-wrap gap-2 mt-3">
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Perkraustymas</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Santechnika</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Medkirtys</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Second Card -->
                    <div class="swiper-slide">
                        <section class="border bg-neutral-100 p-4 rounded-lg max-w-full h-auto sm:h-64 min-h-[300px]">
                            <div class="mx-auto">
                                <div class="card md:flex max-w-lg">
                                    <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                                        <img class="object-cover rounded-full" src="https://tailwindflex.com/public/images/user.png">
                                    </div>
                                    <div class="flex-grow text-center md:text-left">
                                        <p class="font-bold">Medkirtys</p>
                                        <div class="flex items-center justify-center md:justify-start space-x-2">
                                            <h3 class="text-xl font-bold heading">Jonas Ponas</h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-yellow">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="..." />
                                            </svg>
                                            <span class="text-md text-gray-600">(4.9)</span>
                                        </div>
                                        <p class="mt-2 mb-3">Jonas yra profesionalus medzio apdailininkas...</p>
                                        <div class="flex flex-wrap gap-2 mt-3">
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Perkraustymas</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Santechnika</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Medkirtys</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Second Card -->
                    <div class="swiper-slide">
                        <section class="border bg-neutral-100 p-4 rounded-lg max-w-full h-auto sm:h-64 min-h-[300px]">
                            <div class="mx-auto">
                                <div class="card md:flex max-w-lg">
                                    <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                                        <img class="object-cover rounded-full" src="https://tailwindflex.com/public/images/user.png">
                                    </div>
                                    <div class="flex-grow text-center md:text-left">
                                        <p class="font-bold">Medkirtys</p>
                                        <div class="flex items-center justify-center md:justify-start space-x-2">
                                            <h3 class="text-xl font-bold heading">Jonas Ponas</h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-yellow">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="..." />
                                            </svg>
                                            <span class="text-md text-gray-600">(4.9)</span>
                                        </div>
                                        <p class="mt-2 mb-3">Jonas yra profesionalus medzio apdailininkas...</p>
                                        <div class="flex flex-wrap gap-2 mt-3">
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Perkraustymas</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Santechnika</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Medkirtys</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Second Card -->
                    <div class="swiper-slide">
                        <section class="border bg-neutral-100 p-4 rounded-lg max-w-full h-auto sm:h-64 min-h-[300px]">
                            <div class="mx-auto">
                                <div class="card md:flex max-w-lg">
                                    <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                                        <img class="object-cover rounded-full" src="https://tailwindflex.com/public/images/user.png">
                                    </div>
                                    <div class="flex-grow text-center md:text-left">
                                        <p class="font-bold">Medkirtys</p>
                                        <div class="flex items-center justify-center md:justify-start space-x-2">
                                            <h3 class="text-xl font-bold heading">Jonas Ponas</h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-yellow">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="..." />
                                            </svg>
                                            <span class="text-md text-gray-600">(4.9)</span>
                                        </div>
                                        <p class="mt-2 mb-3">Jonas yra profesionalus medzio apdailininkas...</p>
                                        <div class="flex flex-wrap gap-2 mt-3">
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Perkraustymas</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Santechnika</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Medkirtys</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Second Card -->
                    <div class="swiper-slide">
                        <section class="border bg-neutral-100 p-4 rounded-lg max-w-full h-auto sm:h-64 min-h-[300px]">
                            <div class="mx-auto">
                                <div class="card md:flex max-w-lg">
                                    <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                                        <img class="object-cover rounded-full" src="https://tailwindflex.com/public/images/user.png">
                                    </div>
                                    <div class="flex-grow text-center md:text-left">
                                        <p class="font-bold">Medkirtys</p>
                                        <div class="flex items-center justify-center md:justify-start space-x-2">
                                            <h3 class="text-xl font-bold heading">Jonas Ponas</h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 fill-yellow">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="..." />
                                            </svg>
                                            <span class="text-md text-gray-600">(4.9)</span>
                                        </div>
                                        <p class="mt-2 mb-3">Jonas yra profesionalus medzio apdailininkas...</p>
                                        <div class="flex flex-wrap gap-2 mt-3">
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Perkraustymas</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Santechnika</span>
                                            <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">Medkirtys</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Add more cards here -->
                </div>
            </div>
        </div>

        <!-- Tapk Partneriu -->
        <div class="overflow-hidden my-4 py-12 max-w-3xl mx-auto rounded-lg">
            <div class="text-primary-light items-center text-center flex flex-col shadow-md p-6">
                <h2 class="font-extrabold text-3xl md:text-3xl sm:text-1xl mb-2">Norite tapti mūsų partneriu ir gauti papildomų pajamų?</h2>
                <p class="mx-auto mt-4 max-w-lg text-md md:text-lg leading-7 text-gray-600 mb-2">
                    Prisijunkite dabar ir išnaudokite visas galimybes!
                </p>
                <a class="mt-6 mb-4 rounded-lg bg-primary-light px-6 py-3 text-base font-medium leading-6 text-white hover:bg-primary-verylight transition focus:outline-none focus:ring focus:border-primary-dark"
                   href="#">Registruotis</a>
            </div>
        </div>

        <section class="py-24 ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div
                    class="flex justify-center items-center gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8 max-w-sm sm:max-w-2xl lg:max-w-full mx-auto">
                    <div class="w-full lg:w-2/5">
                        <span class="text-sm text-gray-500 font-medium mb-4 block">Atsiliepimai</span>
                        <h2 class="text-4xl font-bold text-gray-900 leading-[3.25rem] mb-8">Jau daugiau nei 100+ klientų paliko <span
                                class=" text-transparent bg-clip-text bg-gradient-to-tr from-primary-dark to-primary-verylight">Atsiliepimą</span>
                        </h2>
                        <!-- Slider controls -->
                        <div class="flex items-center justify-center lg:justify-start gap-10">
                            <button id="slider-button-left"
                                    class="swiper-button-left group flex justify-center items-center border border-solid border-primary-light w-12 h-12 transition-all duration-500 rounded-lg hover:bg-primary-verylight"
                                    data-carousel-prev>
                                <svg class="h-6 w-6 text-primary-light group-hover:text-white" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.9999 12L4.99992 12M9.99992 6L4.70703 11.2929C4.3737 11.6262 4.20703 11.7929 4.20703 12C4.20703 12.2071 4.3737 12.3738 4.70703 12.7071L9.99992 18"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </button>
                            <button id="slider-button-right"
                                    class="swiper-button-right group flex justify-center items-center border border-solid border-primary-light w-12 h-12 transition-all duration-500 rounded-lg hover:bg-primary-verylight"
                                    data-carousel-next>
                                <svg class="h-6 w-6 text-primary-light group-hover:text-white" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 12L19 12M14 18L19.2929 12.7071C19.6262 12.3738 19.7929 12.2071 19.7929 12C19.7929 11.7929 19.6262 11.6262 19.2929 11.2929L14 6"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div class="w-full lg:w-3/5">
                        <!--Slider wrapper-->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide group bg-white border border-solid border-gray-300 rounded-2xl max-sm:max-w-sm max-sm:mx-auto p-6 transition-all duration-500 hover:border-primary">
                                    <div class="flex items-center gap-5 mb-5 sm:mb-9">
                                        <img class="rounded-full object-cover" src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar">
                                        <div class="grid gap-1">
                                            <h5 class="text-gray-900 font-medium transition-all duration-500  ">Jurga S.</h5>
                                            <span class="text-sm leading-6 text-gray-500">Direktore </span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center mb-5 sm:mb-9 gap-2 text-amber-500 transition-all duration-500  ">
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="text-sm text-gray-500 leading-6 transition-all duration-500 min-h-24  group-hover:text-gray-800">
                                        Reikėjo greitos fotografės paslaugos, dėka myapp Lietuva, turėjau galimybė greitai rasti profesionalią fotografę.
                                    </p>

                                </div>
                                <div class="swiper-slide group bg-white border border-solid border-gray-300 rounded-2xl max-sm:max-w-sm max-sm:mx-auto p-6 transition-all duration-500 hover:border-primary">
                                    <div class="flex items-center gap-5 mb-5 sm:mb-9">
                                        <img class="rounded-full object-cover" src="	https://pagedone.io/asset/uploads/1696229994.png" alt="avatar">
                                        <div class="grid gap-1">
                                            <h5 class="text-gray-900 font-medium transition-all duration-500  ">Tomas S.
                                            </h5>
                                            <span class="text-sm leading-6 text-gray-500">Darbininkas </span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center mb-5 sm:mb-9 gap-2 text-amber-500 transition-all duration-500  ">
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="text-sm text-gray-500 leading-6 transition-all duration-500 min-h-24 group-hover:text-gray-800">
                                        Reikėjo pagalbos kraustantis į kitą butą, my app lietuva leido man greitai surasti puikią pagalbą, vienas nebūčiau susitvarkes.
                                    </p>

                                </div>
                                <div class="swiper-slide group bg-white border border-solid border-gray-300 rounded-2xl max-sm:max-w-sm max-sm:mx-auto p-6 transition-all duration-500 hover:border-primary">
                                    <div class="flex items-center gap-5 mb-5 sm:mb-9">
                                        <img class="rounded-full object-cover" src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar">
                                        <div class="grid gap-1">
                                            <h5 class="text-gray-900 font-medium transition-all duration-500  ">Urte N.</h5>
                                            <span class="text-sm leading-6 text-gray-500">CEO </span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center mb-5 sm:mb-9 gap-2 text-amber-500 transition-all duration-500  ">
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="text-sm text-gray-500 leading-6 transition-all duration-500 min-h-24 group-hover:text-gray-800">
                                        Reikejo papildomu ranku organizuojant rengini, myapp leido greitai surasti talentinga mergina pagalbai.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skiriamoji juosta -->
        <div class="flex justify-center items-center space-x-2 mx-auto max-w-md mt-4">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
            <hr class="w-16 h-1 bg-primary-light border-0 rounded md:my-12 opacity-50">
        </div>

        <section class="py-16 relative">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                    <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                        <div class="w-full flex-col justify-center items-start gap-8 flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2
                                    class="text-primary text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                    Skatiname Bendruomenes Dirbti Kartu</h2>
                                <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                    MyAPP Lietuva sujungia žmones, kuriems reikia paslaugų, su patikimais specialistais jų mieste. Mūsų platforma
                                    pagrįsta pasitikėjimu ir bendradarbiavimu - nuo kasdienių darbų iki profesionalių paslaugų, padedame
                                    paprastai ir greitai rasti reikiamą pagalbą.</p>
                            </div>
                            <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex">
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h3 class="text-primary-light text-4xl font-bold font-manrope leading-normal">50+</h3>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Paslaugų Rūšių</h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-primary-light text-4xl font-bold font-manrope leading-normal">5000+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Atliktų Užsakymų</h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-primary-light text-4xl font-bold font-manrope leading-normal">500+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Įvairių Sričių Partnerių</h6>
                                </div>
                            </div>
                        </div>
                        <button
                            class="sm:w-fit w-full px-3.5 py-2 bg-primary-light hover:bg-primary-verylight transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                            <span class="px-1.5 text-white text-sm font-medium leading-6">Rasti Specialistą Dabar</span>
                        </button>
                    </div>
                    <div
                        class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-last order-first">
                        <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                            <img class=" rounded-1xl object-cover" src="{{ asset('images/delivery-man.jpg') }}" alt="about Us image" />
                        </div>
                        <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="{{ asset('images/wedding-planner1.jpg') }}"
                             alt="about Us image" />
                    </div>
                </div>
            </div>
        </section>




        @endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // ============= TAB FUNCTIONALITY =============
            const tabButtons = document.querySelectorAll("[data-tabs-target]");
            const tabPanels = document.querySelectorAll("[role='tabpanel']");

            // Get active and inactive classes from data attributes
            const tabsToggle = document.querySelector('[data-tabs-toggle]');
            const activeClasses = tabsToggle?.getAttribute('data-tabs-active-classes')?.split(' ') ||
                ["text-primary-light", "border-b-2", "border-primary-light", "font-semibold"];
            const inactiveClasses = tabsToggle?.getAttribute('data-tabs-inactive-classes')?.split(' ') ||
                ["text-gray-500", "hover:text-gray-600", "hover:border-gray-300"];

            // Function to handle tab switching
            const switchTab = (targetId) => {
                // Hide all panels
                tabPanels.forEach((tabPanel) => {
                    if (tabPanel.id === targetId) {
                        tabPanel.classList.remove("hidden");
                    } else {
                        tabPanel.classList.add("hidden");
                    }
                });

                // Update classes on tab buttons
                tabButtons.forEach((tabButton) => {
                    const tabTarget = tabButton.getAttribute("data-tabs-target").substring(1);

                    if (tabTarget === targetId) {
                        // Add active classes
                        activeClasses.forEach(cls => tabButton.classList.add(cls));
                        // Remove inactive classes
                        inactiveClasses.forEach(cls => tabButton.classList.remove(cls));
                        tabButton.setAttribute('aria-selected', 'true');

                        // Sync selection between mobile and desktop versions
                        const buttonId = tabButton.getAttribute('id') || '';
                        let counterpartId = '';

                        if (buttonId.startsWith('desktop-')) {
                            counterpartId = buttonId.replace('desktop-', '');
                        } else {
                            counterpartId = 'desktop-' + buttonId;
                        }

                        const counterpartButton = document.getElementById(counterpartId);
                        if (counterpartButton) {
                            // Apply active classes to counterpart button
                            activeClasses.forEach(cls => counterpartButton.classList.add(cls));
                            inactiveClasses.forEach(cls => counterpartButton.classList.remove(cls));
                            counterpartButton.setAttribute('aria-selected', 'true');
                        }
                    } else {
                        // Remove active classes
                        activeClasses.forEach(cls => tabButton.classList.remove(cls));
                        // Add inactive classes
                        inactiveClasses.forEach(cls => tabButton.classList.add(cls));
                        tabButton.setAttribute('aria-selected', 'false');
                    }
                });
            };

            // Add event listeners to all tab buttons
            tabButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    const targetId = button.getAttribute("data-tabs-target").substring(1);
                    switchTab(targetId);
                });
            });

            // Initialize the first tab as active
            if (tabButtons.length > 0) {
                const firstTabId = tabButtons[0].getAttribute("data-tabs-target").substring(1);
                switchTab(firstTabId);
            }

            // ============= SWIPER INITIALIZATION =============
            // Initialize the main Swiper instance if it exists
            const swiperContainer = document.querySelector('.swiper-container');
            if (swiperContainer) {
                const swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1, // Default to 1 slide per view
                    spaceBetween: 20, // Space between slides
                    centeredSlides: true, // Center the active slide
                    loop: true, // Enable infinite looping
                    autoplay: {
                        delay: 3000, // Move to the next slide every 3 seconds
                        disableOnInteraction: false,
                    },
                    autoHeight: true, // Adjust height based on content
                    navigation: {
                        nextEl: '.swiper-button-next', // Class for the "next" button
                        prevEl: '.swiper-button-prev', // Class for the "previous" button
                    },
                    breakpoints: {
                        1024: {
                            slidesPerView: 2, // Show 2 slides per view on larger screens
                            centeredSlides: false,
                        },
                    },
                });
            }

            // Initialize the specific Swiper instance for the "mySwiper" class
            const mySwiperContainer = document.querySelector('.mySwiper');
            if (mySwiperContainer) {
                const reviewSwiper = new Swiper('.mySwiper', {
                    slidesPerView: 2,
                    spaceBetween: 28,
                    centeredSlides: false,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '#slider-button-right', // Specific navigation buttons for this Swiper
                        prevEl: '#slider-button-left',
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                            centeredSlides: false,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 28,
                            centeredSlides: false,
                        },
                        1024: {
                            slidesPerView: 2,
                            spaceBetween: 32,
                        },
                    },
                });
            }
        });
    </script>



@endsection

