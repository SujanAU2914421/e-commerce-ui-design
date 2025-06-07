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
                    <h1 class="text-3xl font-semibold mb-6">Privacy Policy</h1>
                    <div class="mt-2 text-sm text-gray-700">
                        This Privacy Policy explains how we collect, use, disclose, and safeguard your information when
                        you visit our website. By using our site, you agree to the practices described in this policy.
                    </div>

                    <div class="space-y-6 text-sm leading-relaxed max-w-md mt-8">
                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Information We Collect</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We may collect personal information including your name, email address, contact details,
                                and any other data you provide through forms or purchases.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">How We Use Your Information</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Your information helps us deliver and improve our services, process transactions,
                                respond to inquiries, and send updates or promotional content if you have opted in.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Cookies</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We use cookies to enhance user experience. These small files help us understand how you
                                interact with the site and allow features like remembering your preferences.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Data Sharing</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We do not sell your personal data. Information may be shared with third-party service
                                providers solely to assist in delivering our services under confidentiality agreements.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Security</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We implement strict measures to protect your data from unauthorized access or
                                disclosure. However, no digital method is 100% secure, and we cannot guarantee absolute
                                safety.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Your Rights</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                You can request to view, edit, or delete your personal data at any time. Please contact
                                our support team for any such requests.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Changes to This Policy</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We may update this policy occasionally. Any changes will be posted on this page with an
                                updated “Last Updated” date.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Contact Us</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                If you have any questions about this Privacy Policy, please email us at
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
