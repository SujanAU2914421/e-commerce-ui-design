<nav class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white flex justify-around py-2 md:hidden shadow-inner">
    <a href="{{ url('/') }}" class="flex flex-col items-center text-xs hover:text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
        </svg>
        Home
    </a>
    <a href="{{ url('/search') }}" class="flex flex-col items-center text-xs hover:text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
        </svg>
        Search
    </a>
    <a href="{{ url('/profile') }}" class="flex flex-col items-center text-xs hover:text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A9 9 0 1118.88 6.196M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        Profile
    </a>
</nav>
