@php
    $products = include resource_path('data/products-array.blade.php');
    $cartItems = [
        [
            'name' => 'Vintage T-Shirt',
            'quantity' => 2,
            'price' => 24.99,
        ],
        [
            'name' => 'Sneakers',
            'quantity' => 1,
            'price' => 59.99,
        ],
        [
            'name' => 'Leather Wallet',
            'quantity' => 1,
            'price' => 39.0,
        ],
    ];
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
                    <div class="relative text-gray-800 font-bold text-center">My Cart</div>
                    <div class="space-y-4 mt-8" x-data='{ cartItems: <?php echo json_encode($cartItems); ?>}'>
                        <template x-for="(item, index) in cartItems" :key="index">
                            <div class="flex items-center gap-4 border px-4 rounded-lg border-gray-200 py-4">
                                <div class="w-14 h-14 rounded-full overflow-hidden bg-gray-100">
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs text-gray-500" x-text="item.category"></div>
                                    <div class="text-sm font-medium" x-text="item.name"></div>
                                    <div class="text-xs text-gray-600 mt-1">
                                        $<span x-text="(item.price * item.quantity).toFixed(2)"></span>
                                        (<span x-text="'Qty: ' + item.quantity"></span>)
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-4">
                                    <button @click="cartItems.splice(index, 1)"
                                        class="text-gray-600 hover:text-red-500 cursor-pointer transition">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4
                                a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg>
                                    </button>
                                    <div class="text-xs text-gray-400">Total: $<span
                                            x-text="(item.price * item.quantity).toFixed(2)"></span></div>
                                </div>
                            </div>
                        </template>
                        <div class="relative flex justify-end mt-4">
                            <a href="/checkout">
                                <div
                                    class="relative h-10 px-8 rounded-lg bg-gray-800 text-white flex items-center justify-center text-sm">
                                    Proceed to check out</div>
                            </a>
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
