<nav x-data="{ cart_drawer_open: false, favorite_drawer_open: false, show_search: false }"
    class="flex justify-between bg-white z-40 sticky top-0 items-center w-full h-20 xl:px-16 lg:px-8 md:px-4 px-2 border-gray-200">

    {{-- Logo --}}
    <div class="relative flex items-center">
        <x-logo />


    </div>
    <div class="relative flex  *:text-sm *:text-gray-800 *:font-bold gap-16">
        <a href="{{ url('/') }}" class="hover:text-gray-900">Home</a>
        <a href="{{ url('/products') }}" class="hover:text-gray-900">Products</a>
        <a href="{{ url('/about-us') }}" class="hover:text-gray-900">About Us</a>
    </div>

    <div class="relative space-x-8 flex items-center">
        {{-- Search Popup --}}
        <div x-show="show_search" @click.away="show_search = false" @keydown.escape.window="show_search = false"
            class="fixed top-0 left-0 z-70 h-screen w-screen bg-black/10 flex items-center justify-center">
            <div class="absolute h-full w-full" @click="show_search = false"></div>
            <div class="relative py-8 px-8 bg-white rounded-lg shadow-lg flex items-center justify-center">
                <div class="relative">
                    <div class="relative text-md text-center">Search for Items</div>
                    <div
                        class="w-80 h-10 bg-white mt-4 rounded-lg flex items-center border border-gray-300 shadow overflow-hidden">
                        <input type="text" name="search-query" class="w-full h-full px-4 text-sm outline-none"
                            placeholder="Search..." autofocus />
                        <div class="w-10 h-10 flex items-center justify-center">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-search">
                                <circle cx="11" cy="11" r="8" />
                                <line x1="21" y1="21" x2="16.65" y2="16.65" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative mt-4 flex justify-center">
                        <a href="/products">
                            <div
                                class="relative h-10 px-8 flex items-center shadow justify-center bg-gray-800 text-white rounded-lg cursor-pointer text-sm">
                                Search
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Profile Info --}}
        <div class="flex items-center gap-8">
            {{-- Action Icons --}}
            <div class="flex items-center gap-5">
                {{-- Search Button (Triggers Popup) --}}
                <div @click="show_search = !show_search" class="relative text-gray-800 cursor-pointer">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>

                {{-- Favorite Icon --}}
                <div @click="favorite_drawer_open = !favorite_drawer_open"
                    class="relative text-gray-800 rounded-full flex items-center justify-center cursor-pointer">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                    </svg>
                </div>

                {{-- Cart Icon --}}
                <div @click="cart_drawer_open = !cart_drawer_open"
                    class="relative text-gray-800 rounded-full flex items-center justify-center cursor-pointer">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-cart">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                    </svg>
                </div>
            </div>

            {{-- User Info & Points --}}
            <a href="/account/profile">
                <div class="relative flex items-center gap-8">
                    <div class="flex items-center gap-2">
                        <div
                            class="h-10 w-10 rounded-full border-2 border-gray-800 p-[3px] flex items-center justify-center text-white">
                            <div
                                class="h-full w-full text-xs bg-gray-800 rounded-full flex items-center justify-center font-bold">
                                U
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm">Account</span>
                            <span class="text-xs underline text-gray-500">Dom Incardini</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Favorite Drawer --}}
    <div x-show="favorite_drawer_open" @click.away="favorite_drawer_open = false"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
        class="fixed z-50 top-0 right-0 h-screen w-[400px] bg-white border-l border-gray-400 overflow-y-auto shadow-lg px-6">
        <div class="py-8 text-center font-bold uppercase">Favorite</div>
        <x-ui.favorite-items-list />
    </div>

    {{-- Cart Drawer --}}
    <div x-show="cart_drawer_open" @click.away="cart_drawer_open = false"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
        class="fixed z-50 top-0 right-0 h-screen w-96 bg-white border-l border-gray-300 overflow-y-auto shadow-lg px-6 pb-16">
        <div class="py-8 text-center font-bold uppercase tracking-wide">Cart</div>

        <x-ui.cart-list />

        <div class="mt-5">
            <div class="flex justify-between">
                <span class="text-sm font-bold text-gray-700">Total</span>
                <span class="flex items-center gap-2 text-sm text-orange-500 font-bold">
                    <span class="text-gray-600">Rs.</span>201
                </span>
            </div>
            <div
                class="relative h-10 w-full flex items-center cursor-pointer text-sm font-medium justify-center mt-4 bg-gray-800 text-white rounded-lg">
                Proceed to checkout
            </div>
        </div>
    </div>
</nav>
