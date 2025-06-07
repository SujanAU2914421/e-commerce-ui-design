<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Privacy Policy - FigPic</title>

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

        <div class="relative flex-grow w-full">
            <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16">
                <section class="w-full xl:px-16 lg:px-8 md:px-4 px-2 mt-12 mb-20 text-gray-800">
                    <div class="text-3xl font-semibold text-center mb-14">Privacy Policy</div>

                    {{-- Section 1 --}}
                    <div class="relative mt-8 flex flex-col md:flex-row items-center gap-6">
                        <div class="relative w-full md:w-1/2 pr-0 md:pr-16">
                            <div class="text-4xl font-bold mt-6">Information We Collect</div>
                            <div class="mt-4 text-sm text-gray-600 leading-6">
                                We collect data like your name, email, address, and phone number during account creation
                                or purchase.
                            </div>
                        </div>
                        <div
                            class="relative h-[350px] w-full md:w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                            <div class="h-full w-full"
                                style="background: url('https://source.unsplash.com/800x600/?data,privacy') center / cover">
                            </div>
                        </div>
                    </div>

                    {{-- Section 2 --}}
                    <div class="relative mt-8 flex flex-col md:flex-row-reverse items-center gap-6">
                        <div class="relative w-full md:w-1/2 pl-0 md:pl-16">
                            <div class="text-4xl font-bold mt-6">How We Use Your Data</div>
                            <div class="mt-4 text-sm text-gray-600 leading-6">
                                We use it to process orders, offer support, personalize your experience, and send
                                updates or promotions.
                            </div>
                        </div>
                        <div
                            class="relative h-[350px] w-full md:w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                            <div class="h-full w-full"
                                style="background: url('https://source.unsplash.com/800x600/?business,analytics') center / cover">
                            </div>
                        </div>
                    </div>

                    {{-- Section 3 --}}
                    <div class="relative mt-8 flex flex-col md:flex-row items-center gap-6">
                        <div class="relative w-full md:w-1/2 pr-0 md:pr-16">
                            <div class="text-4xl font-bold mt-6">Data Protection</div>
                            <div class="mt-4 text-sm text-gray-600 leading-6">
                                We use advanced security measures to protect your personal data from unauthorized access
                                or misuse.
                            </div>
                        </div>
                        <div
                            class="relative h-[350px] w-full md:w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                            <div class="h-full w-full"
                                style="background: url('https://source.unsplash.com/800x600/?security,lock') center / cover">
                            </div>
                        </div>
                    </div>

                    {{-- Section 4 --}}
                    <div class="relative mt-8 flex flex-col md:flex-row-reverse items-center gap-6">
                        <div class="relative w-full md:w-1/2 pl-0 md:pl-16">
                            <div class="text-4xl font-bold mt-6">Your Rights</div>
                            <div class="mt-4 text-sm text-gray-600 leading-6">
                                You can view, update, or delete your personal data by reaching out to us anytime.
                            </div>
                        </div>
                        <div
                            class="relative h-[350px] w-full md:w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                            <div class="h-full w-full"
                                style="background: url('https://source.unsplash.com/800x600/?rights,freedom') center / cover">
                            </div>
                        </div>
                    </div>

                    {{-- Section 5 --}}
                    <div class="relative mt-8 flex flex-col md:flex-row items-center gap-6">
                        <div class="relative w-full md:w-1/2 pr-0 md:pr-16">
                            <div class="text-4xl font-bold mt-6">Contact & Support</div>
                            <div class="mt-4 text-sm text-gray-600 leading-6">
                                Questions or concerns? Email us at <a href="mailto:support@figpic.com"
                                    class="underline">support@figpic.com</a>.
                            </div>
                        </div>
                        <div
                            class="relative h-[350px] w-full md:w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                            <div class="h-full w-full"
                                style="background: url('https://source.unsplash.com/800x600/?support,help') center / cover">
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
