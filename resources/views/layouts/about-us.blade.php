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
                    <h1 class="text-3xl font-semibold mb-6">About Us</h1>
                    <div class="mt-2 text-sm text-gray-700">
                        Welcome to FigPic! We are passionate about creating seamless online shopping experiences that
                        connect you with quality products and reliable service.
                    </div>

                    <div class="space-y-6 text-sm leading-relaxed max-w-md mt-8">
                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Our Mission</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                To empower customers by offering a wide range of products with convenience,
                                transparency, and trust at the heart of everything we do.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Our Vision</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                To become the go-to e-commerce platform known for excellent customer service, innovative
                                solutions, and a community-focused approach.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Our Values</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Integrity, innovation, customer-centricity, and sustainability guide all our actions and
                                decisions.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Our Team</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Our dedicated team works tirelessly behind the scenes to ensure that your shopping
                                experience is smooth, enjoyable, and trustworthy.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Get in Touch</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Have questions or feedback? We’d love to hear from you! Reach out at
                                <a href="mailto:support@figpic.com"
                                    class="text-blue-600 underline">support@figpic.com</a>.
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
