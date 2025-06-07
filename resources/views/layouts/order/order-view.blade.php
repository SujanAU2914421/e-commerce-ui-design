@php
    $products = include resource_path('data/products-array.blade.php');
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Order Details</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <x-navbar />
    <div class="relative min-h-screen w-full overflow-y-auto text-gray-800" x-data="{ showCancelModal: false }">
        <main class="max-w-4xl mx-auto px-10 py-10 mb-16 flex-col space-y-8">
            <div class="relative flex justify-between">
                <h1 class="text-xl font-bold">Order Tracking</h1>
                <div>
                    @if ($order['status'] == 'cancelled')
                        <button @click="showCancelModal = true"
                            class="px-4 h-10 flex items-center justify-center bg-red-600 text-white rounded-lg text-sm hover:bg-red-700 cursor-pointer">Cancel
                            Order</button>
                    @endif
                </div>
            </div>

            <div class="relative flex gap-8 *:w-1/2">


                {{-- Delivery Info --}}
                <div class="relative flex w-full">
                    <div class="bg-white border w-full border-gray-300 rounded-lg p-6 shadow-lg shadow-gray-200">
                        <div class="relative flex gap-3 items-center">
                            <div class="relative text-gray-600">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map">
                                    <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                    <line x1="8" y1="2" x2="8" y2="18"></line>
                                    <line x1="16" y1="6" x2="16" y2="22"></line>
                                </svg>
                            </div>
                            <h2 class="font-semibold text-gray-700">Delivery Info</h2>
                        </div>
                        <div class="relative mt-4 text-gray-800 text-normal font-semibold">
                            <div class="relative flex *:w-1/2">
                                <div class="relative">
                                    <span class="relative font-normal text-xs">Address</span>
                                    <div class="relative mt-1 text-sm">{{ $order['delivery']['address'] }}</div>
                                </div>
                                <div class="relative">
                                    <span class="relative font-normal text-xs">City</span>
                                    <div class="relative mt-1 text-sm">{{ $order['delivery']['city'] }}</div>
                                </div>
                            </div>
                            <div class="relative flex *:w-1/2 mt-4">
                                <div class="relative">
                                    <span class="relative font-normal text-xs">Delivery Method</span>
                                    <div class="relative mt-1 text-sm">{{ $order['delivery']['method'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Order Summary --}}
                <div class="relative flex w-full">
                    <div class="bg-white w-full border border-gray-300 rounded-lg p-6 shadow-lg shadow-gray-200">
                        <div class="relative flex gap-3 items-center">
                            <div class="relative text-gray-600">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <h2 class="font-semibold text-gray-700">Order Summary</h2>
                        </div>
                        <div class="relative mt-4 text-gray-800 text-normal font-semibold flex *:w-1/2">
                            <div class="relative">
                                <div class="relative font-normal text-xs">Ordered Date</div>
                                <div class="relative mt-1 text-sm">{{ ucfirst($order['ordered_date']) }}</div>
                            </div>
                        </div>
                        <div class="relative mt-4 text-gray-800 text-normal font-semibold flex *:w-1/2">
                            <div class="relative">
                                <div class="relative font-normal text-xs">Status</div>
                                <div class="relative mt-1 text-sm">{{ ucfirst($order['status']) }}</div>
                            </div>
                            <div class="relative">
                                <div class="relative font-normal text-xs">Estimated Delivery </div>
                                <div class="relative mt-1 text-sm">
                                    {{ \Carbon\Carbon::parse($order['estimated_delivery'])->format('F j, Y') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Items Purchased --}}
            <div class="bg-white p-6">
                <div class="relative flex gap-3 items-center">
                    <div class="relative">
                        <!-- icon -->
                    </div>
                    <h2 class="font-semibold">Items</h2>
                </div>
                <div class="relative flex-col space-y-4 mt-4">
                    @foreach ($order['items'] as $index => $item)
                        <div
                            class="relative flex gap-4 w-full border rounded-lg px-4 border-gray-300 items-center justify-between">
                            <div class="relative h-auto w-10 flex items-center justify-center">{{ $index + 1 }}</div>
                            <div class="flex w-full justify-between py-3">
                                <div>
                                    <p class="font-medium">{{ $item['name'] }}</p>
                                    <div class="relative flex gap-2">
                                        <p class="text-sm text-gray-500">Rs.
                                            {{ number_format($item['price_per_piece']) }} per piece</p>
                                        <p class="text-sm text-gray-500">x</p>
                                        <p class="text-sm text-gray-800 font-bold">{{ $item['quantity'] }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p>Rs. {{ number_format($item['total']) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Price Breakdown --}}
            <div class="bg-white border border-gray-300 rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">Total</h2>
                <div class="flex justify-between py-1">
                    <span>Subtotal</span>
                    <span>Rs. {{ number_format($order['pricing']['subtotal']) }}</span>
                </div>
                <div class="flex justify-between py-1">
                    <span>Shipping</span>
                    <span>Rs. {{ number_format($order['pricing']['shipping']) }}</span>
                </div>
                <div class="flex justify-between py-1 text-green-600">
                    <span>Discount</span>
                    <span>- Rs. {{ number_format($order['pricing']['discount']) }}</span>
                </div>
                <div class="flex justify-between py-2 text-lg font-bold border-t border-gray-300 mt-2 pt-2">
                    <span>Total Cost</span>
                    <span>Rs. {{ number_format($order['pricing']['total']) }}</span>
                </div>
            </div>

            {{-- Actions --}}
            <div class="flex justify-end gap-3">
                <a href="#"
                    class="px-4 h-10 flex items-center justify-center bg-gray-800 text-white rounded-lg text-sm hover:bg-black">Download
                    Invoice</a>
                <a href="/products"
                    class="px-4 h-10 flex items-center justify-center border border-gray-300 rounded-lg text-sm hover:bg-gray-100">Continue
                    Shopping</a>
                @if ($order['status'] == 'cancelled')
                    <button @click="showCancelModal = true"
                        class="px-4 h-10 flex items-center justify-center bg-red-600 text-white rounded-lg text-sm hover:bg-red-700 cursor-pointer">Cancel
                        Order</button>
                @endif
            </div>
        </main>

        {{-- Cancel Modal --}}
        <div x-show="showCancelModal" x-transition
            class="fixed inset-0 flex items-center justify-center bg-black/10 z-50">
            <div @click.away="showCancelModal = false" class="bg-white rounded-lg shadow w-full max-w-md p-6">
                <h2 class="text-xl font-semibold mb-4">Cancel Order?</h2>
                <p class="mb-6">Are you sure you want to cancel this order?</p>
                <div class="flex justify-end gap-3">
                    <button @click="showCancelModal = false"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 cursor-pointer">No</button>
                    <button @click="showCancelModal = false"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 cursor-pointer">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
    <x-mobile-footer-nav />

    <style>
        .input {
            @apply border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800;
        }
    </style>
</body>

</html>
