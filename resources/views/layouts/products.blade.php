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
        <div class="relative w-full h-auto">

            {{-- navbar --}}
            <x-navbar />

            {{-- contents --}}
            <div class="relative flex-grow w-full">
                <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16">
                    <div class="relative h-auto w-full pt-8 flex">
                        <div class="relative w-72">
                            <div class="relative flex mb-4">
                                <div
                                    class="relative px-8 h-10 flex items-center justify-center text-sm rounded-lg font-bold cursor-pointer bg-red-600 text-white">
                                    Reset Filters</div>
                            </div>
                            <div x-data="{ categories: ['Fruits', 'Vegetables', 'Grains', 'Meat', 'Dairy'] }" class="relative">
                                <h2 class="text-lg font-semibold mb-2">Categories</h2>
                                <ul class="space-y-2">
                                    <template x-for="(category, index) in categories" :key="index">
                                        <div class="relative flex">
                                            <div class="cursor-pointer py-1 flex items-center text-sm">
                                                <input :id="`${category}-${index}`" type="checkbox"
                                                    class="mr-2 h-4 w-4 cursor-pointer" />
                                                <label :for="`${category}-${index}`" x-text="category"
                                                    class="cursor-pointer"></label>
                                            </div>
                                        </div>
                                    </template>
                                </ul>
                            </div>

                            <div class="relative mt-8">
                                <div class="relative font-bold">
                                    Price Sort
                                </div>
                                <div class="relative grid gap-2 mt-2">

                                    <div
                                        class="relative h-9 w-[150px] rounded-sm border-gray-500 flex items-center justify-center text-sm border">
                                        Low to High</div>
                                    <div
                                        class="relative h-9 w-[150px] rounded-sm border-gray-500 flex items-center justify-center text-sm border">
                                        High to Low</div>
                                </div>
                            </div>
                        </div>
                        <div class="relative h-auto w-full">
                            <div class="relative h-auto w-full">
                                <div
                                    class="relative grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-4">
                                    {{-- Product Cards --}}
                                    @foreach ($products as $product)
                                        <x-hero-product-card :product="$product" :href="url('/product/view/' . $product['id'])" />
                                    @endforeach
                                </div>
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
    </div>
</body>

</html>
