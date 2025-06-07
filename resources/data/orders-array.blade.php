<?php

return [
    [
        'id' => 1,
        'status' => 'Cancelled',
        'ordered_date' => 'June 4, 2025',
        'estimated_delivery' => 'June 9, 2025',
        'delivery' => [
            'address' => 'Hattiban, Lalitpur',
            'city' => 'Kathmandu',
            'method' => 'Standard',
        ],
        'items' => [
            [
                'id' => 1,
                'name' => 'Blue Hoodie',
                'price_per_piece' => 1500,
                'quantity' => 1,
                'total' => 1500,
            ],
            [
                'id' => 2,
                'name' => 'White Sneakers',
                'price_per_piece' => 2000,
                'quantity' => 2,
                'total' => 4000,
            ],
        ],
        'pricing' => [
            'subtotal' => 5500,
            'shipping' => 200,
            'discount' => 300,
            'total' => 5400,
        ],
    ],

    [
        'id' => 2,
        'status' => 'Delivered',
        'ordered_date' => 'June 4, 2025',
        'estimated_delivery' => 'May 28, 2025',
        'delivery' => [
            'address' => 'Jawalakhel, Lalitpur',
            'city' => 'Kathmandu',
            'method' => 'Express',
        ],
        'items' => [
            [
                'id' => 3,
                'name' => 'Black Denim Jacket',
                'price_per_piece' => 3200,
                'quantity' => 1,
                'total' => 3200,
            ],
        ],
        'pricing' => [
            'subtotal' => 3200,
            'shipping' => 100,
            'discount' => 0,
            'total' => 3300,
        ],
    ],

    [
        'id' => 3,
        'status' => 'Shipped',
        'ordered_date' => 'June 4, 2025',
        'estimated_delivery' => 'June 12, 2025',
        'delivery' => [
            'address' => 'New Road, Pokhara',
            'city' => 'Pokhara',
            'method' => 'Standard',
        ],
        'items' => [
            [
                'id' => 4,
                'name' => 'Graphic T-shirt',
                'price_per_piece' => 999,
                'quantity' => 3,
                'total' => 2997,
            ],
            [
                'id' => 5,
                'name' => 'Cargo Pants',
                'price_per_piece' => 1800,
                'quantity' => 1,
                'total' => 1800,
            ],
        ],
        'pricing' => [
            'subtotal' => 4797,
            'shipping' => 150,
            'discount' => 200,
            'total' => 4747,
        ],
    ],

    [
        'id' => 4,
        'status' => 'Processing',
        'ordered_date' => 'June 4, 2025',
        'estimated_delivery' => 'June 15, 2025',
        'delivery' => [
            'address' => 'Itahari-5, Sunsari',
            'city' => 'Itahari',
            'method' => 'Standard',
        ],
        'items' => [
            [
                'id' => 6,
                'name' => 'Canvas Tote Bag',
                'price_per_piece' => 750,
                'quantity' => 2,
                'total' => 1500,
            ],
            [
                'id' => 7,
                'name' => 'Bucket Hat',
                'price_per_piece' => 600,
                'quantity' => 1,
                'total' => 600,
            ],
        ],
        'pricing' => [
            'subtotal' => 2100,
            'shipping' => 100,
            'discount' => 0,
            'total' => 2200,
        ],
    ],
];
