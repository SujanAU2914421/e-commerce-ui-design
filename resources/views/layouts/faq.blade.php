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
                <div class="text-center mt-16 mb-8 text-3xl font-bold">FAQ</div>
                <!-- FAQ Accordion -->
                <div x-data="{
                    active: 'faq1',
                    setActive(faq) {
                        this.active = (this.active !== faq) ? faq : '';
                    }
                }"
                    class="mx-auto max-w-xl divide-y divide-zinc-200/75 overflow-hidden rounded-lg border border-zinc-200/75 text-sm shadow-lg">
                    <!-- FAQ 1 -->
                    <details x-bind:open="active === 'faq1'" class="group">
                        <summary x-on:click.prevent="setActive('faq1')"
                            class="flex cursor-pointer list-none items-center justify-between p-4 hover:bg-zinc-50 group-open:bg-zinc-50 [&::-webkit-details-marker]:hidden">
                            <h4 class="text-left font-semibold">What is FigPic?</h4>
                            <div class="relative size-5 opacity-40">
                                <!-- Down Icon -->
                                <svg class="absolute size-5 transition group-open:translate-y-4 group-open:opacity-0"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                                </svg>
                                <!-- Up Icon -->
                                <svg class="absolute size-5 -translate-y-4 opacity-0 transition group-open:translate-y-0 group-open:opacity-100"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.47 6.47a.75.75 0 011.06 0l4.25 4.25a.75.75 0 11-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 11-1.06-1.06l4.25-4.25z" />
                                </svg>
                            </div>
                        </summary>
                        <p class="p-4 text-zinc-600">
                            FigPic is an e-commerce platform designed for creative sellers and buyers to connect through
                            visual content and unique product experiences.
                        </p>
                    </details>

                    <!-- FAQ 2 -->
                    <details x-bind:open="active === 'faq2'" class="group">
                        <summary x-on:click.prevent="setActive('faq2')"
                            class="flex cursor-pointer list-none items-center justify-between p-4 hover:bg-zinc-50 group-open:bg-zinc-50 [&::-webkit-details-marker]:hidden">
                            <h4 class="text-left font-semibold">Is FigPic free to use?</h4>
                            <div class="relative size-5 opacity-40">
                                <svg class="absolute size-5 transition group-open:translate-y-4 group-open:opacity-0"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                                </svg>
                                <svg class="absolute size-5 -translate-y-4 opacity-0 transition group-open:translate-y-0 group-open:opacity-100"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.47 6.47a.75.75 0 011.06 0l4.25 4.25a.75.75 0 11-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 11-1.06-1.06l4.25-4.25z" />
                                </svg>
                            </div>
                        </summary>
                        <p class="p-4 text-zinc-600">
                            Yes! FigPic is completely free for customers. Sellers can create a shop at no cost, with
                            optional paid features for boosting visibility.
                        </p>
                    </details>

                    <!-- FAQ 3 -->
                    <details x-bind:open="active === 'faq3'" class="group">
                        <summary x-on:click.prevent="setActive('faq3')"
                            class="flex cursor-pointer list-none items-center justify-between p-4 hover:bg-zinc-50 group-open:bg-zinc-50 [&::-webkit-details-marker]:hidden">
                            <h4 class="text-left font-semibold">How do I become a seller?</h4>
                            <div class="relative size-5 opacity-40">
                                <svg class="absolute size-5 transition group-open:translate-y-4 group-open:opacity-0"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                                </svg>
                                <svg class="absolute size-5 -translate-y-4 opacity-0 transition group-open:translate-y-0 group-open:opacity-100"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.47 6.47a.75.75 0 011.06 0l4.25 4.25a.75.75 0 11-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 11-1.06-1.06l4.25-4.25z" />
                                </svg>
                            </div>
                        </summary>
                        <p class="p-4 text-zinc-600">
                            Just sign up, go to your dashboard, and click “Start Selling.” Fill in your shop details and
                            you're ready to post your first product.
                        </p>
                    </details>
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
