<nav x-data="{ cart_drawer_open: false, favorite_drawer_open: false }"
    class="flex justify-between bg-white z-40 sticky top-0 items-center w-full h-20 xl:px-16 lg:px-8 md:px-4 px-2 border-b border-gray-200">
    {{-- logo --}}
    <x-logo />
    <div class="relative space-x-8 flex items-center">
        {{-- search field --}}
        <div class="relative">
            <div
                class="relative w-96 h-10 bg-white rounded-lg overflow-hidden flex items-center border-gray-300 border shadow shadow-gray-200">
                <div class="relative w-full h-full bg-white">
                    <input type="text" name="search-query" id=""
                        class="outline-none decoration-0 w-full text-sm h-full px-4" placeholder="Search...">
                </div>
                <div class="relative w-13 h-10 bg-gray-800 text-white flex items-center justify-center">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
        </div>
        {{-- profile and other links --}}
        <div class="relative flex items-center justify-center gap-8">
            <div class="relative flex items-center gap-8">
                <div class="relative flex items-center gap-2">
                    <div
                        class="relative h-10 w-10 rounded-full border-2 border-gray-800 p-[3px] text-white flex items-center justify-center">
                        <div
                            class="relative h-full w-full text-xs bg-gray-800 rounded-full flex items-center justify-center font-bold">
                            U
                        </div>
                    </div>
                    <div class="relative flex-row">
                        <div class="relative text-sm">Account</div>
                        <div class="relative text-xs underline text-gray-500">Dom incardini</div>
                    </div>
                </div>
                <div class="relative flex-row">
                    <div class="relative text-sm">Loyalty Points</div>
                    <div class="relative flex items-center gap-2">
                        <div class="relative text-gray-800">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </div>
                        <div class="relative text-md text-gray-500">0</div>
                    </div>
                </div>
            </div>
            <div class="relative flex items-center gap-4">
                <div @click="cart_drawer_open = !cart_drawer_open"
                    class="relative h-10 w-10 bg-gray-800 text-white cursor-pointer rounded-full flex items-center justify-center">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg>
                    <div
                        class="absolute font-bold -top-2 -right-2 h-5 min-w-5 px-2 text-[10px] border rounded-full border-gray-800 bg-white text-gray-800 flex items-center justify-center">
                        0</div>
                </div>
                <div @click="favorite_drawer_open = !favorite_drawer_open"
                    class="relative h-10 w-10 bg-gray-800 text-white cursor-pointer rounded-full flex items-center justify-center">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-cart">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <div
                        class="absolute font-bold -top-2 -right-2 h-5 min-w-5 px-2 text-[10px] border rounded-full border-gray-800 bg-white text-gray-800 flex items-center justify-center">
                        99</div>
                </div>
                <div x-show="cart_drawer_open" @click.away="cart_drawer_open = false" y-transition
                    class="fixed z-50 bg-transparent h-screen w-[400px] top-0 right-0">
                    <div @click="cart_drawer_open = false" class="fixed h-screen w-screen bg-black/5 top-0 left-0">
                    </div>
                    <div
                        class="absolute z-10 overflow-y-auto bg-white h-screen w-full top-0 duration-300 border-l border-gray-400">
                        <div class="relative h-full w-full">
                            <div class="relative py-8 text-center">Favorite</div>
                            <x-ui.favorite-items-list />
                        </div>
                    </div>
                </div>
                <div x-show="favorite_drawer_open" @click.away="favorite_drawer_open = false" y-transition
                    class="fixed z-50 bg-transparent h-screen w-screen top-0 left-0">
                    <div @click="favorite_drawer_open = false" class="absolute h-full w-full bg-black/5 top-0 left-0">
                    </div>
                    <div class="absolute z-10 bg-white h-screen w-96 top-0 right-0 border-l border-gray-400">
                        <div class="relative h-full w-full">
                            <div class="relative py-8 text-center uppercase tracking-wide font-bold">Cart</div>
                            <x-ui.cart-list />
                            <div class="relative mt-5 px-4">
                                <div class="relative flex justify-between">
                                    <div class="relative text-sm font-bold text-gray-700">Total</div>
                                    <div class="relative flex gap-2 items-center"><span
                                            class="text-sm text-gray-600">Rs.</span><span
                                            class="text-normal font-bold text-orange-500">201</span></div>
                                </div>
                                <div class="relative mt-4">
                                    <div
                                        class="relative w-full h-10 rounded flex items-center justify-center font-bold text-sm cursor-pointer text-white bg-gray-800">
                                        Check out</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</nav>

{{-- sub-navbar --}}
@if (request()->is('products') || request()->is('products/*'))
    <x-sub-navbar />
@endif
