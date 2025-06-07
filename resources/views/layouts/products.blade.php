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

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <div class="relative h-screen w-screen overflow-y-auto">
        <div class="relative w-full h-auto">

            {{-- navbar --}}
            <x-navbar />

            {{-- contents --}}
            <div class="relative flex-grow w-full" x-data="productFilter()" x-init="init()">
                <div class="relative w-full xl:px-16 lg:px-8 md:px-4 px-2 mb-16">
                    <div class="relative h-auto w-full pt-8 flex">
                        {{-- Sidebar filters --}}
                        <div class="relative w-72">
                            <div class="relative flex mb-4">
                                <div @click="selectedCategories = []; sortBy = ''"
                                    class="relative px-8 h-10 flex items-center justify-center text-sm rounded-lg font-bold cursor-pointer bg-red-600 text-white">
                                    Reset Filters
                                </div>
                            </div>

                            <div class="relative">
                                <h2 class="text-lg font-semibold mb-2">Categories</h2>
                                <ul class="space-y-2">
                                    <template x-for="(category, index) in categories" :key="index">
                                        <div class="relative flex">
                                            <div class="cursor-pointer py-1 flex items-center text-sm">
                                                <input type="checkbox" class="mr-2 h-4 w-4 cursor-pointer"
                                                    :value="category" @change="toggleCategory(category)"
                                                    :checked="selectedCategories.includes(category)" />
                                                <label x-text="category" class="cursor-pointer"></label>
                                            </div>
                                        </div>
                                    </template>
                                </ul>
                            </div>

                            <div class="relative mt-8">
                                <div class="relative font-bold">Price Sort</div>
                                <div class="relative grid gap-2 mt-2">
                                    <div @click="sortBy = 'low'"
                                        :class="sortBy === 'low' ? 'bg-gray-800 text-white' :
                                            'bg-white hover:bg-gray-100 border border-gray-600'"
                                        class="cursor-pointer relative h-9 w-[150px] rounded-sm flex items-center justify-center text-sm">
                                        Low to High
                                    </div>
                                    <div @click="sortBy = 'high'"
                                        :class="sortBy === 'high' ? 'bg-gray-800 text-white' :
                                            'bg-white hover:bg-gray-100 border border-gray-600'"
                                        class="cursor-pointer relative h-9 w-[150px] rounded-sm flex items-center justify-center text-sm">
                                        High to Low
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Product Grid --}}
                        <div class="relative h-auto w-full">
                            <div class="relative h-auto w-full">
                                <div
                                    class="relative grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-4">
                                    <template x-for="product in filteredProducts" :key="product.id">
                                        <div @click="window.location.href = `/product/view/${product.id}`"
                                            class="relative h-auto w-full col-span-1 cursor-pointer rounded-xl border group border-gray-200 hover:shadow-md transition bg-white overflow-hidden">

                                            <!-- Favorite Button -->
                                            <button type="button" @click.stop
                                                class="absolute top-4 right-4 h-10 w-10 bg-white z-20 duration-100 shadow-md rounded-full cursor-pointer flex items-center justify-center"
                                                :class="product.is_favorite ? '' : 'group-hover:scale-100 scale-0'">
                                                <svg width="17" height="17" viewBox="0 0 24 24"
                                                    :fill="product.is_favorite ? 'currentColor' : 'none'"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-heart">
                                                    <path
                                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <!-- Image -->
                                            <div class="h-40 w-full overflow-hidden">
                                                <img :src="product.image" :alt="product.name"
                                                    class="object-cover w-full h-full">
                                            </div>

                                            <!-- Content -->
                                            <div class="py-4 px-6 space-y-2">
                                                <h3 class="font-semibold text-gray-800" x-text="product.name"></h3>
                                                <p class="text-sm text-gray-500" x-text="product.description"></p>
                                                <div class="text-normal font-bold text-gray-800">
                                                    <span class="text-gray-600 text-sm">Rs.</span>
                                                    <span x-text="product.price"></span> /
                                                    <span class="text-sm" x-text="product.unit"></span>
                                                </div>

                                                <button type="button" @click.stop
                                                    class="mt-2 w-full h-10 bg-gray-200 text-gray-800 rounded-md font-medium hover:bg-gray-800 cursor-pointer hover:text-white transition flex items-center justify-center">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- footer --}}
                <x-footer />
            </div>

            {{-- mobile footer nav --}}
            <x-mobile-footer-nav />
        </div>
    </div>

    {{-- Alpine Logic --}}
    <script>
        function productFilter() {
            return {
                categories: ['Fruits', 'Vegetables', 'Grains', 'Meat', 'Dairy'],
                selectedCategories: [],
                sortBy: '',
                originalProducts: @json($products),
                get filteredProducts() {
                    let filtered = this.originalProducts;

                    if (this.selectedCategories.length) {
                        filtered = filtered.filter(p =>
                            this.selectedCategories.includes(p.category)
                        );
                    }

                    if (this.sortBy === 'low') {
                        filtered = [...filtered].sort((a, b) => a.price - b.price);
                    } else if (this.sortBy === 'high') {
                        filtered = [...filtered].sort((a, b) => b.price - a.price);
                    }

                    return filtered;
                },
                toggleCategory(cat) {
                    if (this.selectedCategories.includes(cat)) {
                        this.selectedCategories = this.selectedCategories.filter(c => c !== cat);
                    } else {
                        this.selectedCategories.push(cat);
                    }
                },
                init() {
                    // Optional init
                }
            };
        }
    </script>
</body>

</html>
