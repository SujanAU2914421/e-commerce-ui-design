@php
    $products = include resource_path('data/products-array.blade.php');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Profile</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @livewireStyles

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <div class="relative h-screen w-screen overflow-y-auto">
        <div class="relative w-full">
            <div class="relative flex-grow w-full">
                <x-navbar />
                <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16 min-h-screen flex">
                    {{-- Sidebar --}}
                    <div class="relative w-56 pt-8">
                        <x-account-side-navbar />
                    </div>

                    {{-- Main Content --}}
                    <div class="flex-1 pt-8 pl-8">
                        <div class="relative">

                            {{-- Personal Information --}}
                            <div class="relative font-bold text-xl text-gray-600 mb-4">My Profile</div>
                            <x-ui.dashboard.profile />
                            <x-ui.dashboard.personal-information />
                            <x-ui.dashboard.address />
                        </div>
                    </div>
                </div>

                <x-footer />
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
