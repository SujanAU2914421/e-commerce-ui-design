<?php
$cartItems = [
    [
        'name' => 'Vintage T-Shirt',
        'quantity' => 2,
        'price' => 24.99,
    ],
    [
        'name' => 'Sneakers',
        'quantity' => 1,
        'price' => 59.99,
    ],
    [
        'name' => 'Leather Wallet',
        'quantity' => 1,
        'price' => 39.0,
    ],
];
?>

<div x-data='{
        cartItems: <?php echo json_encode($cartItems); ?>
    }' class="py-4 space-y-4">

    <!-- If cart is empty -->
    <template x-if="cartItems.length === 0">
        <div class="text-center text-gray-500 text-sm">No items in cart</div>
    </template>

    <!-- If cart has items -->
    <div x-show="cartItems.length > 0" class="relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Cart Items</h2>
            <button @click="cartItems = []" class="text-sm text-red-500 hover:underline cursor-pointer">Clear All</button>
        </div>

        <div class="space-y-4">
            <template x-for="(item, index) in cartItems" :key="index">
                <div class="flex items-center gap-4 border px-4 rounded-lg border-gray-200 py-4">
                    <div class="w-14 h-14 rounded-full overflow-hidden bg-gray-100"></div>

                    <div class="flex-1">
                        <div class="text-xs text-gray-500" x-text="item.category ?? 'Uncategorized'"></div>
                        <div class="text-sm font-medium" x-text="item.name"></div>
                        <div class="text-xs text-gray-600 mt-1">
                            $<span x-text="(item.price * item.quantity).toFixed(2)"></span>
                        </div>

                        <!-- Quantity controls -->
                        <div class="flex items-center gap-2 mt-2">
                            <button @click="if(item.quantity > 1) item.quantity--"
                                class="w-8 h-8 flex items-center cursor-pointer justify-center text-sm bg-gray-200 rounded hover:bg-gray-300">-</button>
                            <span x-text="item.quantity" class="text-sm"></span>
                            <button @click="item.quantity++"
                                class="w-8 h-8 flex items-center cursor-pointer justify-center text-sm bg-gray-200 rounded hover:bg-gray-300">+</button>
                        </div>
                    </div>

                    <div class="flex flex-col items-end gap-4">
                        <button @click="cartItems.splice(index, 1)"
                            class="text-gray-600 hover:text-red-500 cursor-pointer transition">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-trash">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4
                    a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </button>
                        <div class="text-xs text-gray-400">Total: $<span
                                x-text="(item.price * item.quantity).toFixed(2)"></span></div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
