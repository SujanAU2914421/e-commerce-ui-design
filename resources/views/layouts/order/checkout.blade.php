@php
    $products = include resource_path('data/products-array.blade.php');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Checkout</title>

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
    <div class="relative min-h-screen w-full overflow-y-auto text-gray-800" x-data="{ coupon: '', discount: 0 }">

        {{-- Main Container --}}
        <main class="w-full xl:px-16 lg:px-8 md:px-4 px-2 max-w-5xl mx-auto py-10 space-y-10">

            {{-- Checkout Heading --}}
            <header>
                <div class="relative flex justify-between">
                    <div class="relative">
                        <h1 class="text-2xl text-gray-800 font-bold">Checkout</h1>
                    </div>
                    <div class="relative flex items-center gap-8">
                        <div
                            class="relative cursor-pointer font-bold border gap-3 h-9 px-4 flex items-center justify-center hover:bg-gray-800 hover:text-white rounded-lg text-sm duration-200 text-gray-600">
                            <div class="relative">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </div>
                            Shop More
                        </div>
                    </div>
                </div>
            </header>

            <div class="relative flex gap-8">
                {{-- Shipping Info Section --}}
                <section class="bg-white w-3/5">
                    <div class="relative flex items-center gap-3">
                        <div class="relative">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-info">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold">Shipping Information</h2>
                    </div>
                    <div class="relative mt-8">
                        <div class="relative flex *:w-1/2 gap-8">
                            <div class="relative">
                                <div class="relative font-bold text-sm text-black">First Name</div>
                                <div class="relative border rounded-md h-12 mt-2 border-gray-300">
                                    <input type="text"
                                        class="relative px-4 text-[13px] outline-gray-400 h-full w-full"
                                        placeholder="Full Name" class="input" required>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="relative font-bold text-sm text-black">Last Name</div>
                                <div class="relative border rounded-md h-12 mt-2 border-gray-300">
                                    <input type="text"
                                        class="relative px-4 text-[13px] outline-gray-400 h-full w-full"
                                        placeholder="Full Name" class="input" required>
                                </div>
                            </div>
                        </div>
                        <div class="relative mt-6">
                            <div class="relative font-bold text-sm text-black">Phone Number</div>
                            <div class="relative border rounded-md h-12 mt-2 border-gray-300">
                                <input type="text" class="relative px-4 text-[13px] outline-gray-400 h-full w-full"
                                    placeholder="Full Name" class="input" required>
                            </div>
                        </div>
                        <div class="relative mt-6">
                            <div class="relative font-bold text-sm text-black">Email</div>
                            <div class="relative border rounded-md h-12 mt-2 border-gray-300">
                                <input type="text" class="relative px-4 text-[13px] outline-gray-400 h-full w-full"
                                    placeholder="Email is mandatory" class="input" required>
                            </div>
                        </div>
                        <div class="relative mt-6">
                            <div class="relative font-bold text-sm text-black">City</div>
                            <div class="relative border rounded-md h-12 mt-2 border-gray-300">
                                <input type="text" class="relative px-4 text-[13px] outline-gray-400 h-full w-full"
                                    placeholder="Your location" class="input" required>
                            </div>
                        </div>
                        <div class="relative mt-6">
                            <div class="relative font-bold text-sm text-black">Full Address</div>
                            <div class="relative border rounded-md h-12 mt-2 border-gray-300">
                                <input type="text" class="relative px-4 text-[13px] outline-gray-400 h-full w-full"
                                    placeholder="For precise Pin pointing" class="input" required>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Order Summary Section --}}
                <section class="bg-white w-2/5 p-6 rounded-lg shadow-xl border border-gray-300 shadow-gray-200">

                    {{-- Items Purchased --}}
                    <div class="bg-white">
                        <div class="relative flex mb-4 items-center gap-3">
                            <h2 class="text-normal font-semibold text-gray-800">Items in cart</h2>
                        </div>
                        <div class="relative flex-col space-y-4 mt-4">
                            @foreach ($products as $index => $item)
                                <div
                                    class="relative flex gap-4 w-full border rounded-lg px-4 border-gray-300 items-center justify-between">
                                    <div class="flex w-full justify-between py-3">
                                        <div>
                                            <p class="font-medium">{{ $item['name'] }}</p>
                                            <div class="relative flex gap-2">
                                                <p class="text-sm text-gray-500">Rs.
                                                    {{ number_format($item['price']) }} per piece</p>
                                                <p class="text-sm text-gray-500">x</p>
                                                <p class="text-sm text-gray-800 font-bold">1</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p>Rs. 2000</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex justify-between font-semibold mt-4">
                        <span>Subtotal</span>
                        <span>Rs. 4900</span>
                    </div>

                    <div class="flex justify-between mt-1 text-sm text-green-600" x-show="discount > 0">
                        <span>Discount</span>
                        <span>- Rs. <span x-text="discount"></span></span>
                    </div>

                    <div class="flex justify-between font-bold mt-2 text-lg">
                        <span>Total</span>
                        <span>Rs. <span x-text="4900 - discount"></span></span>
                    </div>
                </section>

            </div>

            {{-- Shipping Method Section --}}
            <section class="bg-white">
                <div class="relative flex gap-3 items-center">
                    <div class="relative">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-truck">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                    <h2 class="font-semibold">Shipping Method</h2>
                </div>
                <div class="space-y-2 mt-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="shipping" value="standard" class="accent-gray-800" checked>
                        <span>Standard (Rs. 150) - 3 to 5 days</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="shipping" value="express" class="accent-gray-800">
                        <span>Express (Rs. 300) - 1 to 2 days</span>
                    </label>
                </div>
            </section>

            <div class="relative flex gap-8">
                <section class="bg-white w-1/2">
                    <div class="relative flex gap-3 items-center">
                        <div class="relative">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-credit-card">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2">
                                </rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>
                        </div>
                        <h2 class="font-semibold">Payment Method</h2>
                    </div>
                    <div class="space-y-2 *:cursor-pointer mt-4">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="payment" value="cod" class="accent-gray-800" checked>
                            <span>Cash on Delivery</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="payment" value="esewa" class="accent-gray-800">
                            <span>eSewa</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="payment" value="khalti" class="accent-gray-800">
                            <span>Khalti</span>
                        </label>
                    </div>
                </section>

                {{-- Promo Code Section --}}
                <section class="bg-white p-6 rounded-lg shadow w-1/2 border border-gray-300 shadow-gray-300">
                    <h2 class="text-xl font-semibold mb-4">Have a Promo Code?</h2>
                    <div class="flex items-center gap-2">
                        <input type="text" x-model="coupon" placeholder="Enter code"
                            class="input flex-1 outline-none border px-3 h-10 rounded-lg border-gray-200 text-sm">
                        <button @click="discount = coupon === 'CYUKI10' ? 500 : 0"
                            class="bg-gray-800 text-white px-4 py-2 rounded-lg text-sm cursor-pointer font-bold hover:bg-gray-800 transition">
                            Apply
                        </button>
                    </div>
                    <p class="text-green-600 mt-2" x-show="discount > 0">Promo applied successfully!</p>
                </section>
            </div>

            {{-- Final Confirmation --}}
            <section
                class="bg-white p-6 rounded-lg shadow flex items-center justify-between border border-gray-300 shadow-gray-300">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" required
                        class="accent-gray-800 outline-none border px-3 h-10 rounded-lg border-gray-200 text-sm">
                    <span>I agree to the <a href="#" class="underline text-blue-600">Terms &
                            Conditions</a></span>
                </label>
                <button
                    class="bg-gray-800 text-white cursor-pointer px-6 py-3 rounded-lg hover:bg-gray-800 transition font-semibold">
                    Place Order
                </button>
            </section>
        </main>

    </div>

    {{-- Footer --}}
    <x-footer />

    {{-- Mobile Footer Nav --}}
    <x-mobile-footer-nav />
    <style>
        .input {
            @apply border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800;
        }
    </style>
</body>

</html>
