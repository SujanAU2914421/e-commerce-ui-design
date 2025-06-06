@props(['product', 'href'])

<div onclick="window.location.href='{{ '/product/view/' . $product['id'] }}'"
    class="relative h-auto w-full col-span-1 cursor-pointer rounded-xl border group border-gray-200 hover:shadow-md transition bg-white overflow-hidden">

    <!-- Favorite Button -->
    <button type="button" onclick="event.stopPropagation();"
        class="absolute top-4 right-4 h-10 w-10 bg-white z-20 duration-100 shadow-md rounded-full cursor-pointer flex items-center justify-center {{ $product['is_favorite'] ? '' : 'group-hover:scale-100 scale-0' }}">
        <svg width="17" height="17" viewBox="0 0 24 24" fill={{ $product['is_favorite'] ? 'currentColor' : 'none' }}
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-heart">
            <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
            </path>
        </svg>
    </button>

    <!-- Image -->
    <div class="h-40 w-full overflow-hidden">
        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="object-cover w-full h-full">
    </div>

    <!-- Content -->
    <div class="p-4 space-y-2">
        <h3 class="text-lg font-semibold text-gray-800">{{ $product['name'] }}</h3>
        <p class="text-sm text-gray-500">{{ $product['description'] }}</p>
        <div class="text-xl font-bold text-gray-800">
            <span class="text-gray-600 text-sm">Rs.</span> {{ $product['price'] }} / <span
                class="text-sm">{{ $product['unit'] }}</span>
        </div>

        <button type="button" onclick="event.stopPropagation();"
            class="mt-2 w-full h-10 bg-gray-200 text-gray-800 rounded-md font-medium hover:bg-gray-800 cursor-pointer hover:text-white transition flex items-center justify-center">
            Add to Cart
        </button>
    </div>
</div>
