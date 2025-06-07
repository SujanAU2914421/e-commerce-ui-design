<?php
$favoriteItems = [
    [
        'id' => 0,
        'name' => 'Cheese Burger',
        'description' => 'Grilled beef with double cheese & fresh veggies',
        'price' => 280,
        'unit' => 'Packet',
        'image' => 'https://i.pinimg.com/1200x/eb/cb/c6/ebcbc6aaa9deca9d6efc1efc93b66945.jpg',
        'category' => 'Fast Food',
    ],
    [
        'id' => 1,
        'name' => 'Chicken Wrap',
        'description' => 'Juicy grilled chicken with spicy mayo and lettuce',
        'price' => 250,
        'unit' => 'Wrap',
        'image' => 'https://i.pinimg.com/1200x/0b/e0/40/0be040109b8b9adfede2f8edd9fdf2d7.jpg',
        'category' => 'Fast Food',
    ],
    [
        'id' => 2,
        'name' => 'Veggie Pizza',
        'description' => 'Loaded with fresh vegetables and mozzarella cheese',
        'price' => 400,
        'unit' => 'Medium',
        'image' => 'https://i.pinimg.com/1200x/80/ea/24/80ea24c3c18dd61864b4ca56ea6d905f.jpg',
        'category' => 'Pizza',
    ],
    [
        'id' => 3,
        'name' => 'French Fries',
        'description' => 'Crispy golden fries served with tangy ketchup',
        'price' => 120,
        'unit' => 'Box',
        'image' => 'https://i.pinimg.com/1200x/73/7e/d9/737ed93987aae98a76fc2e5f12fc0ecc.jpg',
        'category' => 'Snacks',
    ],
    [
        'id' => 4,
        'name' => 'Chocolate Shake',
        'description' => 'Chilled chocolate milkshake topped with cream',
        'price' => 180,
        'unit' => 'Glass',
        'image' => 'https://i.pinimg.com/1200x/58/ee/52/58ee529250709937fe63b056ad23d27f.jpg',
        'category' => 'Beverages',
    ],
];
?>

<div x-data='{
        favorites: <?php echo json_encode($favoriteItems); ?>
    }' class="py-4 space-y-4">

    <!-- If favorite list is empty -->
    <template x-if="favorites.length === 0">
        <div class="text-center text-gray-500 text-sm">No favorite items</div>
    </template>

    <!-- If favorite list has items -->
    <div x-show="favorites.length > 0" class="relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Favorite Items</h2>
            <button @click="favorites = []" class="text-sm text-red-500 hover:underline cursor-pointer">Clear All</button>
        </div>

        <div class="space-y-4 pb-16">
            <template x-for="(item, index) in favorites" :key="index">
                <div class="flex items-center gap-4 border rounded-lg px-4 border-gray-200 py-4">
                    <div class="w-14 h-14 rounded-full overflow-hidden">
                        <img :src="item['image']" :alt="product['name']" class="object-cover w-full h-full">
                    </div>

                    <div class="flex-1">
                        <div class="text-xs text-gray-500" x-text="item.category"></div>
                        <div class="text-sm font-medium" x-text="item.name"></div>
                        <div class="text-xs text-gray-600 mt-1">$<span x-text="item.price.toFixed(2)"></span></div>
                    </div>

                    <div class="flex flex-col items-end gap-4">
                        <button @click="favorites.splice(index, 1)"
                            class="text-gray-600 hover:text-red-500 cursor-pointer transition">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trash">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4
                                a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                            </svg>
                        </button>
                        <button
                            class="text-xs border cursor-pointer px-3 py-1 rounded-lg bg-gray-800 text-white transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
