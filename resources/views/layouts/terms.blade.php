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
                <section class="max-w-4xl mx-auto mt-12 mb-20 text-gray-800">
                    <h1 class="text-3xl font-semibold mb-6">Terms & Conditions</h1>
                    <div class="mt-2 text-sm text-gray-700">
                        By accessing or using our website, you agree to be bound by these Terms and Conditions.
                        If
                        you disagree with any part, please do not use our site.
                    </div>

                    <div class="space-y-6 text-sm leading-relaxed max-w-md mt-8">
                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Use of Site</div>

                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                This website is for your personal and non-commercial use only. You agree not to use the
                                site
                                in any unlawful or prohibited manner.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Intellectual Property</div>

                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                All content on this site including logos, graphics, images, and texts are owned by or
                                licensed to us. You are not permitted to reproduce or use any of the content without
                                written
                                permission.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Product Information</div>

                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We strive to ensure that all details, descriptions, and prices of products are accurate.
                                However, errors may occur and we reserve the right to correct them.
                            </div>
                        </div>
                        <div class="relative mt-4">

                            <div class="text-xl font-semibold mt-6">User Behavior</div>

                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                You agree not to post or smit any harmful, offensive, or illegal content through
                                our
                                website.
                            </div>
                        </div>
                        <div class="relative mt-4">

                            <div class="text-xl font-semibold mt-6">Limitation of Liability</div>

                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We are not liable for any direct or indirect damages arising from your use of the
                                website or
                                any information provided on it.
                            </div>
                        </div>
                        <div class="relative mt-4">

                            <div class="text-xl font-semibold mt-6">Modifications</div>

                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We may update or modify these Terms at any time without prior notice. Continued use of
                                the
                                site after changes indicates your acceptance.
                            </div>
                        </div>
                        <div class="relative mt-4">

                            <div class="text-xl font-semibold mt-6">Governing Law</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                These Terms are governed by and interpreted in accordance with the laws of Nepal, and
                                you
                                submit to the exclusive jurisdiction of the courts located there.
                            </div>
                        </div>
                    </div>
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
