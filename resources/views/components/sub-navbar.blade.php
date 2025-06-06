<nav class="flex items-center justify-between xl:px-16 lg:px-8 md:px-4 px-2 py-8">
    {{-- All Categories dropdown --}}
    <div class="relative flex items-center space-x-6">

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="flex items-center space-x-1 text-gray-700 cursor-pointer hover:text-gray-900 focus:outline-none">
                <span>All Categories</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6"></path>
                </svg>
            </button>

            <div x-show="open" @click.away="open = false" x-transition
                class="absolute left-0 mt-2 w-56 bg-white border rounded shadow-md z-10">
                <a href="{{ url('/categories/electronics') }}" class="block px-4 py-2 hover:bg-gray-100">Electronics</a>
                <a href="{{ url('/categories/fashion') }}" class="block px-4 py-2 hover:bg-gray-100">Fashion</a>
                <a href="{{ url('/categories/home-garden') }}" class="block px-4 py-2 hover:bg-gray-100">Home &
                    Garden</a>
                <a href="{{ url('/categories/beauty') }}" class="block px-4 py-2 hover:bg-gray-100">Beauty & Health</a>
                <a href="{{ url('/categories/sports') }}" class="block px-4 py-2 hover:bg-gray-100">Sports &
                    Outdoors</a>
                <a href="{{ url('/categories/toys') }}" class="block px-4 py-2 hover:bg-gray-100">Toys & Hobbies</a>
                <a href="{{ url('/categories/automotive') }}" class="block px-4 py-2 hover:bg-gray-100">Automotive</a>
            </div>
        </div>

        {{-- Other links --}}
        <div class="relative flex divide-x divide-gray-300 *:text-sm *:text-gray-800 *:font-bold *:px-8">

            <a href="{{ url('/') }}" class="hover:text-gray-900">Home</a>
            <a href="{{ url('/products') }}" class="hover:text-gray-900">Products</a>
            <a href="{{ url('/about-us') }}" class="hover:text-gray-900">About Us</a>
        </div>
    </div>
</nav>
