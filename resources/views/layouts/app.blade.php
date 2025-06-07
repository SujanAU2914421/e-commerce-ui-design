@php
    $products = include resource_path('data/products-array.blade.php');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <div class="relative h-screen w-screen overflow-y-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- contents --}}
        <div class="relative flex-grow w-full">
            <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16">
                <div class="relative h-auto w-full pt-8">
                    <div class="relative h-96 w-full flex items-center text-center">
                        <div class="absolute h-full w-full bg-gray-200 rounded-xl"></div>
                        <div class="relative w-full">
                            <div class="relative text-7xl font-extrabold font-mono leading-[6rem]"><span
                                    class="text-gray-800">EAt</span> <span class="text-gray-800">WeLl</span><br />
                                <span class="text-orange-600">ShIT</span> <span class="text-orange-600">wELl</span>
                            </div>
                            <div class="relative text-xl text-gray-700">Trusted, Fresh, Healthy</div>
                            <div class="relative flex mt-8 justify-center">
                                <a href="/products">
                                    <div
                                        class="relative h-12 px-16 bg-gray-800 text-white rounded-lg shadow flex items-center cursor-pointer justify-center">
                                        Start shopping?
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- categories --}}
                    <div class="relative w-full mt-16 mb-8">
                        <div class="relative text-xl font-bold pb-4">Categories</div>
                        <div x-data="{ categories: ['Pizza', 'Burgers', 'Pasta', 'Drinks', 'Desserts', 'Salads', 'Rice Bowls', 'Wraps'] }" class="relative flex gap-4 flex-wrap">
                            <template x-for="category in categories" :key="category">
                                <div
                                    class="relative h-32 w-40 cursor-pointer select-none rounded-md border border-gray-300 hover:shadow shadow-gray-300 flex items-center justify-center bg-gray-200 hover:bg-gray-800 hover:text-white transition">
                                    <span class="font-medium" x-text="category"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div class="relative w-full pb-8">
                        <div class="relative font-bold pb-4">Burger</div>
                        <div
                            class="relative grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                            {{-- Product Cards --}}
                            @foreach ($products as $product)
                                <x-hero-product-card :product="$product" />
                            @endforeach
                        </div>
                    </div>
                    <div class="relative w-full pb-8">
                        <div class="relative font-bold pb-4">Burger</div>
                        <div
                            class="relative grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                            {{-- Product Cards --}}
                            @foreach ($products as $product)
                                <x-hero-product-card :product="$product" />
                            @endforeach
                        </div>
                    </div>
                    <div class="relative w-full pb-8">
                        <div class="relative font-bold pb-4">Burger</div>
                        <div
                            class="relative grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                            {{-- Product Cards --}}
                            @foreach ($products as $product)
                                <x-hero-product-card :product="$product" />
                            @endforeach
                        </div>
                    </div>
                    <div class="relative w-full pb-8">
                        <div class="relative font-bold pb-4">Burger</div>
                        <div
                            class="relative grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                            {{-- Product Cards --}}
                            @foreach ($products as $product)
                                <x-hero-product-card :product="$product" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- footer --}}
            <x-footer />
        </div>

        {{-- mobile footer nav --}}
        <x-mobile-footer-nav />
    </div>
</body>

</html>
