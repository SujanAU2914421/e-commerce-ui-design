@php
    $orders = include resource_path('data/orders-array.blade.php');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Order History</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
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

                <!-- Contents -->
                <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16 min-h-screen flex">
                    <!-- Side Navbar -->
                    <div class="relative w-56 border-gray-400 pt-8">
                        <x-account-side-navbar />
                    </div>

                    <!-- Main Content -->
                    <div class="relative flex-1 pt-8 px-16">
                        <h1 class="text-2xl font-bold mb-6">Your Orders</h1>

                        <div class="overflow-x-auto bg-white">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 text-sm text-gray-800 font-bold">
                                    <tr>
                                        <th class="px-6 py-3 text-left">No.</th>
                                        <th class="px-6 py-3 text-left">Products</th>
                                        <th class="px-6 py-3 text-left">Total Amount</th>
                                        <th class="px-6 py-3 text-left">Date</th>
                                        <th class="px-6 py-3 text-left">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 text-sm text-gray-800">
                                    @foreach ($orders as $order)
                                        <tr class="hover:bg-gray-50 transition-colors duration-200 cursor-pointer"
                                            onclick="window.location.href='/order/{{ $order['id'] }}'">

                                            <td class="px-6 py-4 text-center">{{ $order['id'] }}</td>
                                            <!-- Products Column -->
                                            <td class="px-6 py-4">
                                                <div class="flex-col flex space-y-2">
                                                    @foreach ($order['items'] as $product)
                                                        <div class="text-sm">
                                                            <span class="font-medium text-gray-700">
                                                                {{ $product['name'] }}
                                                            </span>
                                                            <span class="text-gray-600 text-xs">
                                                                (Rs. {{ $product['price_per_piece'] }} ×
                                                                {{ $product['quantity'] }})
                                                            </span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </td>

                                            <!-- Total Amount Column -->
                                            <td class="px-6 py-4 align-top">Rs. {{ $order['pricing']['total'] }}</td>

                                            <!-- Date Column (Optional: since your array doesn’t have 'date' anymore, maybe estimated_delivery?) -->
                                            <td class="px-6 py-4 align-top">
                                                {{ $order['estimated_delivery'] ?? '-' }}
                                            </td>

                                            <!-- Status Column -->
                                            <td class="px-6 py-4 align-top">
                                                @php
                                                    $status = $order['status'];
                                                    $colors = [
                                                        'Delivered' => [
                                                            'bg' => 'bg-green-100',
                                                            'text' => 'text-green-700',
                                                        ],
                                                        'Pending' => [
                                                            'bg' => 'bg-yellow-100',
                                                            'text' => 'text-yellow-700',
                                                        ],
                                                        'Shipped' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700'],
                                                        'Processing' => [
                                                            'bg' => 'bg-orange-100',
                                                            'text' => 'text-orange-700',
                                                        ],
                                                        'Cancelled' => ['bg' => 'bg-red-100', 'text' => 'text-red-700'],
                                                    ];
                                                    $bg = $colors[$status]['bg'] ?? 'bg-gray-100';
                                                    $text = $colors[$status]['text'] ?? 'text-gray-800';
                                                @endphp
                                                <span
                                                    class="inline-block px-3 py-1 text-xs rounded-full {{ $bg }} {{ $text }}">
                                                    {{ $status }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="flex justify-center items-center mt-6 space-x-2">
                            <button
                                class="px-3 h-8 py-1 rounded cursor-pointer bg-gray-200 items-center text-gray-700 hover:bg-gray-300 transition text-sm flex gap-2">
                                <div class="relative">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </div>
                                <div class="relative">Previous</div>
                            </button>
                            <!-- Example page numbers -->
                            <button class="px-3 h-8 w-8 py-1 rounded cursor-pointer bg-gray-800 text-white">1</button>
                            <button
                                class="px-3 h-8 w-8 py-1 rounded cursor-pointer bg-gray-200 text-gray-700 hover:bg-gray-300 transition">2</button>
                            <div class="relative flex items-end h-full">...</div>
                            <button
                                class="px-3 h-8 w-8 py-1 rounded cursor-pointer bg-gray-200 text-gray-700 hover:bg-gray-300 transition">6</button>

                            <button
                                class="px-3 h-8 py-1 rounded cursor-pointer bg-gray-200 items-center text-gray-700 hover:bg-gray-300 transition text-sm flex gap-2">
                                <div class="relative">Next</div>
                                <div class="relative">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <x-footer />
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
