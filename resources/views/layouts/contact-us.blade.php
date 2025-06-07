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
                <section class="max-w-3xl mx-auto mt-12 mb-20">
                    <h1 class="text-3xl font-semibold mb-6 text-gray-800">Contact Us</h1>
                    <div class="relative">Insert your detail and message and submit we will try to reach you back as
                        soon as we can.</div>

                    <form action="#" method="POST"
                        class="space-y-6 bg-white shadow-lg border-gray-300 border mt-8 rounded-xl p-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-300" />
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-300" />
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-300"></textarea>
                        </div>

                        <div class="text-right flex justify-end">
                            <button type="submit"
                                class="px-6 h-10 flex items-center justify-center bg-blue-600 text-white font-medium text-sm rounded hover:bg-blue-700 transition">Send
                                Message</button>
                        </div>
                    </form>
                </section>
            </div>
            {{-- footer --}}
            <x-footer />
        </div>

        {{-- mobile footer nav --}}
        <x-mobile-footer-nav />
    </div>
</body>

</html>
