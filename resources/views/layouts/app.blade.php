<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@listoworld" />

    <meta property="og:type" content="{{ $og_type ?? 'summary' }}" />
    <meta property="og:title" content="{{ $og_title ?? 'Listo World' }}" />
    <meta property="og:description" content="{{ $og_description ?? 'Do what matters'}}" />
    <meta property="og:image" content="{{ $og_image ?? 'image'}}" />
    <meta property="og:url" content="{{ url()->current() }}" />

    {{ $head ?? ''}}

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>

<body class="font-sans antialiased">


    <div class="h-screen flex overflow-hidden bg-gray-100" x-data="{ openSidebar: false }">

        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div x-show="openSidebar" @click.away="open = false">
            <div class="fixed inset-0 flex z-40">
                <!-- Off-canvas menu overlay, show/hide based on off-canvas menu state. -->
                <!-- Entering: "transition-opacity ease-linear duration-300" From: "opacity-0" To: "opacity-100" -->
                <!-- Leaving: "transition-opacity ease-linear duration-300" From: "opacity-100" To: "opacity-0" -->

                <div class="fixed inset-0">
                    <div class="absolute inset-0 bg-cool-gray-600 opacity-75"></div>
                </div>

                <!-- Off-canvas menu, show/hide based on off-canvas menu state. -->
                <!-- Entering: "transition ease-in-out duration-300 transform" From: "-translate-x-full" To: "translate-x-0" -->
                <!-- Leaving: "transition ease-in-out duration-300 transform" From: "translate-x-0"  To: "-translate-x-full" -->
                <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
                    <div class="absolute top-0 right-0 -mr-14 p-1">
                        <button @click="openSidebar = false" aria-label="Close sidebar"
                            class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-cool-gray-600">
                            <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    @include('partials.logo')

                    <div x-show="openSidebar" @click.away="openSidebar = false">
                        @include('partials.navigation')
                    </div>
                </div>



                <div class="flex-shrink-0 w-14">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64">
                <x-layout.sidebar />
            </div>
        </div>


        <div class="flex-1 overflow-auto focus:outline-none" tabindex="0">
            {{-- @include('partials.navbar') --}}
            <x-layout.navbar>{{ $title }}</x-layout.navbar>




            <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                <!-- Page header -->
                {{ $header ?? '' }}

                {{-- @include('partials.header') --}}

                @if (session()->has('success'))
                <div class="my-4 px-3">
                    <x-layout.alert type="success">{{ session()->get('success') }}</x-layout.alert>
                </div>
                @endif
                @if (session()->has('error'))
                <x-layout.alert type="error">
                    {{ session()->get('error') }}
                </x-layout.alert>
                @endif
                @if (session()->has('info'))
                <x-layout.alert type="info">
                    {{ session()->get('info') }}
                </x-layout.alert>
                @endif
                @if (session()->has('warning'))
                <x-layout.alert type="warning">
                    {{ session()->get('warning') }}
                </x-layout.alert>
                @endif

                <main class="mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>

                    <!-- Activity table (small breakopoint and up) -->
                    {{-- @include('partials.table') --}}

                </main>
            </main>
        </div>
    </div>

    @stack('modals')
    @livewireScripts

</body>

</html>


{{-- <div class="min-h-screen bg-gray-100">
    

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
</div>
</header>

<!-- Page Content -->
<main>
    {{ $slot }}
</main>
</div> --}}