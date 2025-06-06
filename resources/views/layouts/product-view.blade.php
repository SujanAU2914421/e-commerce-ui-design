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

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        /* Remove number input spinners in most modern browsers */
        input[type="number"].no-spinner::-webkit-inner-spin-button,
        input[type="number"].no-spinner::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"].no-spinner {
            -moz-appearance: textfield;
            /* Firefox */
        }
    </style>
</head>

<body>
    <div class="relative h-screen w-screen overflow-y-auto">
        <div class="relative w-full h-auto">

            {{-- navbar --}}
            <x-navbar />

            {{-- contents --}}
            <div class="relative flex-grow w-full">
                <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16 min-h-screen pt-8">
                    <div class="relative h-auto w-full flex">
                        {{-- product details --}}
                        <div class="relative w-1/2 min-h-screen">
                            <div
                                class="relative h-[calc(100vh-8rem)] w-full rounded-xl border-gray-800 border overflow-hidden">
                                <div class="relative h-full w-full"
                                    style="background: url({{ $product['image'] }}) center / cover">
                                </div>
                            </div>
                            <div class="relative mt-5 flex gap-8 flex-wrap">
                                <div class="relative h-32 w-32 rounded-md bg-gray-200 border-gray-800 border"></div>
                            </div>
                        </div>
                        <div class="relative w-1/2 xl:pl-16 lg:pl-8 md:pl-4 px-2">
                            <div class="relative">
                                <div class="relative text-3xl font-extrabold">
                                    {{ $product['name'] }}</div>
                                <div class="relative text-sm text-gray-500 mt-2">
                                    Category:
                                    <span class="text-gray-800 font-bold">
                                        {{ $product['category'] }}
                                    </span>
                                </div>

                                <div class="text-xl font-bold text-gray-800 mt-5">
                                    <span class="text-gray-600 text-sm">Rs.</span>
                                    <span class="text-orange-600">
                                        {{ $product['price'] }}
                                    </span>
                                    <span class="text-gray-500 font-light">/</span>
                                    <span class="text-sm">{{ $product['unit'] }}</span>
                                </div>
                            </div>
                            <div x-data="{ qty: 1 }" class="relative mt-8">
                                <div class="flex items-center gap-2 mt-2">
                                    <button type="button" @click="if (qty > 1) qty--"
                                        class="h-10 w-10 text-xl font-bold text-gray-600 hover:text-gray-800 flex items-center justify-center bg-transparent duration-200 cursor-pointer rounded hover:bg-gray-200 focus:outline-none"
                                        aria-label="Decrease quantity">-</button>

                                    <input type="number" id="quantity" x-model.number="qty" min="1"
                                        placeholder="0"
                                        class="w-20 h-10 text-center border border-gray-300 rounded focus:outline-none focus:ring focus:ring-indigo-300 no-spinner" />

                                    <button type="button" @click="qty++"
                                        class="h-10 w-10 text-xl font-bold text-gray-600 hover:text-gray-800 flex items-center justify-center bg-transparent duration-200 cursor-pointer rounded hover:bg-gray-200 focus:outline-none"
                                        aria-label="Increase quantity">+</button>
                                </div>
                            </div>
                            <div class="relative mt-8 flex items-center gap-4 flex-wrap">
                                <div
                                    class="relative h-10 w-1/2 px-8 gap-4 shadow text-sm rounded-sm cursor-pointer bg-gray-800 text-white hover:bg-black duration-200 font-bold flex items-center justify-center">
                                    <div class="">Add to Cart</div>
                                    <div class="relative">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-shopping-cart">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="relative h-10 w-auto px-8 gap-4 text-sm shadow rounded-sm cursor-pointer {{ $product['is_favorite'] ? 'bg-orange-500 text-white hover:bg-orange-600' : 'bg-white hover:bg-orange-500 text-orange-600 hover:text-white border border-orange-600 hover:border-orange-500' }} duration-200 font-bold flex items-center justify-center">
                                    <div class="">
                                        {{ $product['is_favorite'] ? 'Added to your wishlist' : 'Add to you wishlist' }}
                                    </div>
                                    <div class="relative">
                                        <svg width="17" height="17" viewBox="0 0 24 24"
                                            fill={{ $product['is_favorite'] ? 'currentColor' : 'none' }}
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-heart">
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-8">
                                <div class="relative text-sm font-bold">Product Detail</div>
                                <div class="relative mt-3 text-gray-700">{{ $product['description'] }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative mt-16">
                        <div class="relative">Recommended Products</div>
                        <div
                            class="relative mt-5 grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                            {{-- Product Cards --}}
                            @foreach ($products as $product)
                                <x-hero-product-card :product="$product" :href="url('/product/view/' . $product['id'])" />
                            @endforeach
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
