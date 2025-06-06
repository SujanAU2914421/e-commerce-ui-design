<div x-data="{ showLogoutModal: false }" class="relative h-full">

    <div class="relative flex-row">
        <!-- Dashboard -->
        <div class="mt-2">
            <a href="/account" class="relative">
                <div
                    class="relative flex h-12 px-4 rounded-lg cursor-pointer text-sm items-center gap-4 font-bold duration-300 
                    {{ request()->is('account') ? 'bg-gray-800 text-white' : 'text-gray-800 hover:bg-gray-200' }}">
                    <div class="relative">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div class="relative">Dashboard</div>
                </div>
            </a>
        </div>

        <!-- Order History -->
        <div class="mt-2">
            <a href="/account/order-history" class="relative">
                <div
                    class="relative flex h-12 px-4 rounded-lg cursor-pointer text-sm items-center gap-4 font-bold duration-300 
                    {{ request()->is('account/order-history*') ? 'bg-gray-800 text-white' : 'text-gray-800 hover:bg-gray-200' }}">
                    <div class="relative">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bookmark">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div class="relative">Order History</div>
                </div>
            </a>
        </div>

        <!-- User Profile -->
        <div class="mt-2">
            <a href="/account/profile" class="relative">
                <div
                    class="relative flex h-12 px-4 rounded-lg cursor-pointer text-sm items-center gap-4 font-bold duration-300 
                    {{ request()->is('account/profile*') ? 'bg-gray-800 text-white' : 'text-gray-800 hover:bg-gray-200' }}">
                    <div class="relative">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M4 21v-2a4 4 0 0 1 3-3.87"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="relative">User Profile</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Logout Button -->
    <form method="POST" action="/logout" x-ref="logoutForm" class="relative flex mt-16">
        @csrf
        <button type="button" @click="showLogoutModal = true"
            class="relative h-10 px-8 flex items-center justify-center bg-red-500 text-white rounded-lg cursor-pointer">
            Logout
        </button>
    </form>

    <!-- Modal -->
    <div x-show="showLogoutModal" x-transition
        class="fixed inset-0 z-50 bg-black/10 bg-opacity-50 flex items-center justify-center" x-cloak>
        <div class="bg-white rounded-lg p-6 w-80 shadow-lg text-center">
            <h2 class="text-lg font-semibold mb-2">Are you sure?</h2>
            <p class="text-sm text-gray-600 mb-6">Do you really want to log out?</p>
            <div class="flex justify-center gap-4">
                <button @click="$refs.logoutForm.submit()"
                    class="bg-red-500 cursor-pointer hover:bg-red-600 text-white px-4 py-2 rounded-md">Yes,
                    Logout</button>
                <button @click="showLogoutModal = false"
                    class="bg-gray-200 cursor-pointer hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md">Cancel</button>
            </div>
        </div>
    </div>

</div>
