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
                    <div class="relative flex justify-center">
                        <div class="text-3xl font-semibold mb-6">About Us</div>
                    </div>
                    <div class="flex justify-center">
                        <div class="mt-2 text-sm text-gray-700 max-w-xl text-center">
                            Welcome to FigPic! We are passionate about creating seamless online shopping experiences
                            that
                            connect you with quality products and reliable service.
                        </div>
                    </div>

                    <div class="space-y-6 text-sm leading-relaxed mt-16">
                        <div class="relative mt-8 flex items-center">
                            <div class="relative w-1/2 pr-16">
                                <div class="text-3xl font-bold mt-6">Our Mission</div>
                                <div class="mt-2 text-sm text-gray-600 leading-6">
                                    To empower customers by offering a wide range of products with convenience,
                                    transparency, and trust at the heart of everything we do.
                                </div>
                            </div>
                            <div
                                class="relative h-[300px] w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                                <div class="h-full w-full"
                                    style="background: url('https://i.pinimg.com/1200x/10/5e/b7/105eb7876e069c21e96002f707f3c4c2.jpg') center / cover">
                                </div>
                            </div>
                        </div>
                        <div class="relative mt-8 flex items-center">
                            <div
                                class="relative h-[300px] w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                                <div class="h-full w-full"
                                    style="background: url('https://i.pinimg.com/1200x/36/03/e8/3603e8e435a973122f3d63f689c8bbbe.jpg') center / cover">
                                </div>
                            </div>
                            <div class="relative w-1/2 pl-16">
                                <div class="text-3xl font-bold mt-6">Our Vision</div>
                                <div class="mt-2 text-sm text-gray-600 leading-6">
                                    To become the go-to e-commerce platform known for excellent customer service,
                                    innovative
                                    solutions, and a community-focused approach.
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-8 flex items-center">
                            <div class="relative w-1/2 pr-16">
                                <div class="text-3xl font-bold mt-6">Our Values</div>
                                <div class="mt-2 text-sm text-gray-600 leading-6">
                                    Integrity, innovation, customer-centricity, and sustainability guide all our actions
                                    and
                                    decisions.
                                </div>
                            </div>
                            <div
                                class="relative h-[300px] w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                                <div class="h-full w-full"
                                    style="background: url('https://i.pinimg.com/1200x/e9/8c/ae/e98caefdadcb3b9d7db553bc19eddbd8.jpg') center / cover">
                                </div>
                            </div>
                        </div>


                        <div class="relative mt-8 flex items-center">
                            <div
                                class="relative h-[300px] w-1/2 rounded-4xl bg-gray-200 shadow-gray-200 shadow-xl overflow-hidden">
                                <div class="h-full w-full"
                                    style="background: url('https://i.pinimg.com/1200x/5a/56/cf/5a56cf3f0403ed6162bbb143ca2d1902.jpg') center / cover">
                                </div>
                            </div>
                            <div class="relative w-1/2 pl-16">
                                <div class="text-3xl font-bold mt-6">Our Team</div>
                                <div class="mt-2 text-sm text-gray-600 leading-6">
                                    Our dedicated team works tirelessly behind the scenes to ensure that your shopping
                                    experience is smooth, enjoyable, and trustworthy.
                                </div>
                            </div>
                        </div>

                        <div class="min-h-screen bg-white text-gray-800 py-16 px-4 sm:px-6 lg:px-8">
                            <div class="max-w-xl mx-auto">
                                <h1 class="text-4xl font-bold mb-4 text-center">Get in Touch</h1>
                                <p class="text-gray-600 text-center mb-10">We’d love to hear from you! Fill out the form
                                    and we’ll get back to you soon.</p>

                                <!-- Contact Form -->
                                <form method="POST" action="#" class="space-y-6">
                                    @csrf

                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">Your
                                            Name</label>
                                        <input type="text" name="name" id="name" required
                                            placeholder="What should we call you?"
                                            class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 outline-none">
                                    </div>

                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">Your
                                            Email</label>
                                        <input type="email" name="email" id="email" required
                                            placeholder="Your email address"
                                            class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 outline-none">
                                    </div>

                                    <div>
                                        <label for="message" class="block text-sm font-medium text-gray-700">Your
                                            Message</label>
                                        <textarea name="message" id="message" rows="5" required
                                            class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 outline-none"></textarea>
                                    </div>

                                    <div>
                                        <button type="submit"
                                            class="w-full inline-flex cursor-pointer justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-black focus:outline-none">
                                            Send Message
                                        </button>
                                    </div>
                                </form>

                                <!-- Optional: Contact Info -->
                                <div class="mt-8 text-center text-sm text-gray-500">
                                    <p>Email: support@figpic.com</p>
                                    <p>Phone: +977-9800000000</p>
                                    <p>Location: Kathmandu, Nepal</p>
                                </div>
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
