@php
    $products = include resource_path('data/products-array.blade.php');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Profile</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @livewireStyles

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <div class="relative h-screen w-screen overflow-y-auto">
        <div class="relative w-full">
            <div class="relative flex-grow w-full">
                <x-navbar />
                <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16 min-h-screen flex">
                    {{-- Sidebar --}}
                    <div class="relative w-56 pt-8">
                        <x-account-side-navbar />
                    </div>

                    {{-- Main Content --}}
                    <div class="relative w-full pt-8 px-4 md:px-6 lg:px-8">
                        <div class="relative">

                            {{-- Personal Information --}}
                            <div class="relative font-bold text-xl text-gray-600 mb-4">My Profile</div>
                            <div class="bg-white rounded-xl p-6 border border-gray-200 mb-8 shadow-lg shadow-gray-100">
                                <div class="relative flex justify-between items-center">
                                    <div class="relative flex items-center gap-4">
                                        <div
                                            class="relative h-16 w-16 bg-gray-200 border border-gray-200 rounded-full overflow-hidden flex items-center justify-center">
                                            <div class="relative h-full w-full"
                                                style="background: url('https://i.pinimg.com/1200x/a1/18/2f/a1182f1dcb1e9afda517026981fa826e.jpg') center / cover">
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <div class="relative font-bold">Sujan Limbu</div>
                                            <div class="relative text-gray-600 text-sm">A nonchalant Guy</div>
                                        </div>
                                    </div>
                                    <div
                                        class="relative flex items-center px-4 cursor-pointer hover:bg-gray-100 h-10 rounded-full border border-gray-200 text-sm font-medium text-gray-600 gap-3">
                                        <div class="relative">Edit</div>
                                        <div class="relative">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-6 border border-gray-200 mb-8 shadow-lg shadow-gray-100">
                                <div class="relative flex justify-between">
                                    <div class="relative">
                                        <div class="relative flex gap-3 items-center text-gray-600">
                                            <div class="relative">
                                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-folder">
                                                    <path
                                                        d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="relative text-md font-semibold">Personal
                                                Information
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="relative flex items-center px-4 cursor-pointer hover:bg-gray-100 h-10 rounded-full border border-gray-200 text-sm font-medium text-gray-600 gap-3">
                                        <div class="relative">Edit</div>
                                        <div class="relative">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div class="relative flex *:w-1/2">
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">First Name</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">Sujan</div>
                                        </div>
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">Last Name</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">Limbu</div>
                                        </div>
                                    </div>
                                    <div class="relative flex *:w-1/2 mt-4">
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">Email address</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">
                                                deecoodeer@gmail.com</div>
                                        </div>
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">Phone</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">
                                                +997-9708901653</div>
                                        </div>
                                    </div>
                                    <div class="relative flex *:w-1/2 mt-4">
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">Bio</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">
                                                IT intern</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-6 border border-gray-200 mb-8 shadow-lg shadow-gray-100">
                                <div class="relative flex justify-between">
                                    <div class="relative">
                                        <div class="relative items-center flex gap-3 text-gray-600">
                                            <div class="relative">
                                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-map-pin">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                            </div>
                                            <div class="relative text-md font-semibold">Address</div>
                                        </div>
                                    </div>
                                    <div
                                        class="relative flex items-center px-4 cursor-pointer hover:bg-gray-100 h-10 rounded-full border border-gray-200 text-sm font-medium text-gray-600 gap-3">
                                        <div class="relative">Edit</div>
                                        <div class="relative">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div class="relative flex *:w-1/2">
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">Country</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">Nepal</div>
                                        </div>
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">City / State</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">Birtamode-1,
                                                panchakanya</div>
                                        </div>
                                    </div>
                                    <div class="relative flex *:w-1/2 mt-4">
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">Postal Code</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1">57204
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <div class="relative text-xs text-gray-500 font-medium">TAX ID</div>
                                            <div class="relative text-sm font-semibold text-gray-800 mt-1 uppercase">
                                                9239239ei29332</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-footer />
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
