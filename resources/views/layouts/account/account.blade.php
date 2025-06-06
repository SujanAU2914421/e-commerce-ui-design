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
                <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16 min-h-screen flex gap-6">
                    <!-- Sidebar -->
                    <div class="w-56 pt-8 ">
                        <x-account-side-navbar />
                    </div>

                    <!-- Dashboard Content -->
                    <div class="flex-1 pt-8 pl-8">
                        {{-- Example Compartment Structure --}}
                        <div class="flex flex-row gap-6">
                            <!-- Card 1 -->
                            <div class="px-8 py-8 w-56 shadow rounded-xl text-white bg-green-600">
                                <div class="text-md">Total Orders</div>
                                <div class="text-3xl mt-3 font-extrabold">12</div>
                            </div>
                            <!-- Card 2 -->
                            <div class="px-8 py-8 w-64 shadow rounded-xl text-white bg-orange-500">
                                <div class="text-md">Wallet Balance</div>
                                <div class="text-3xl mt-3 font-extrabold"><span class="text-xl">Rs.</span> 5,250</div>
                            </div>
                        </div>
                        <div class="relative mt-16">
                            <div class="relative h-auto">
                                <div class="relative flex justify-between">
                                    <div class="relative font-bold text-xl">Recent Orders</div>
                                    <div class="relative flex items-center gap-3 cursor-pointer group">
                                        <div class="relative text-sm font-bold">Check All</div>
                                        <div
                                            class="relative group-hover:translate-x-1 transition-transform duration-300">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 bg-white shadow rounded-lg overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="px-6 py-3 text-left font-semibold text-gray-700">Order ID
                                                </th>
                                                <th class="px-6 py-3 text-left font-semibold text-gray-700">Date</th>
                                                <th class="px-6 py-3 text-left font-semibold text-gray-700">Status</th>
                                                <th class="px-6 py-3 text-left font-semibold text-gray-700">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-100">
                                            @foreach ([['id' => '#1001', 'date' => '2025-06-04', 'status' => 'Delivered', 'amount' => 'Rs. 1,200'], ['id' => '#1002', 'date' => '2025-06-03', 'status' => 'Pending', 'amount' => 'Rs. 950'], ['id' => '#1003', 'date' => '2025-06-02', 'status' => 'Cancelled', 'amount' => 'Rs. 500'], ['id' => '#1004', 'date' => '2025-06-01', 'status' => 'Shipped', 'amount' => 'Rs. 2,000']] as $order)
                                                <tr>
                                                    <td class="px-6 py-4 text-gray-800 font-medium">{{ $order['id'] }}
                                                    </td>
                                                    <td class="px-6 py-4 text-gray-600">{{ $order['date'] }}</td>
                                                    <td class="px-6 py-4">
                                                        <span
                                                            class="px-2 py-1 rounded-full text-xs font-medium
                                                                @if ($order['status'] === 'Delivered') bg-green-100 text-green-700
                                                                @elseif ($order['status'] === 'Pending') bg-yellow-100 text-yellow-700
                                                                @elseif ($order['status'] === 'Cancelled') bg-red-100 text-red-700
                                                                @else bg-blue-100 text-blue-700 @endif">
                                                            {{ $order['status'] }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-gray-800">{{ $order['amount'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
