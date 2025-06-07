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
                    <h1 class="text-3xl font-semibold">Return & Refund Policy</h1>
                    <div class="mt-2 text-sm text-gray-700">
                        We value your satisfaction. If you’re not completely happy with your purchase, here’s how we can
                        help.
                    </div>

                    <div class="space-y-6 text-sm leading-relaxed max-w-md mt-8">
                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Eligibility for Returns</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Items must be returned within 7 days of delivery. They must be unused and in the same
                                condition you received them, with original packaging included.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Non-Returnable Items</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Certain goods like perishable items, personal care products, and customized items cannot
                                be returned. Sale items are also non-refundable unless damaged.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Return Process</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Contact us at <a href="mailto:support@example.com"
                                    class="text-blue-500 underline">support@example.com</a> with your order number and
                                reason for return. We’ll guide you through the steps.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Refunds</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                Once we receive your return, we’ll inspect it and notify you. If approved, your refund
                                will be processed to your original payment method within 7–10 business days.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Exchanges</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                We only replace items if they are defective or damaged. For exchanges, please email us
                                and include your order number.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Shipping Costs</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                You are responsible for return shipping costs unless the return is due to our error. We
                                recommend using a trackable shipping method.
                            </div>
                        </div>

                        <div class="relative mt-4">
                            <div class="text-xl font-semibold mt-6">Need Help?</div>
                            <div class="mt-2 text-sm text-gray-600 leading-6">
                                For any questions, feel free to reach out to us at <a href="mailto:support@example.com"
                                    class="text-blue-500 underline">support@example.com</a>.
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
