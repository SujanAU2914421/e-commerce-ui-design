<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/products', function () {
    return view('layouts.products');
});

Route::get('/account', function () {
    return view('layouts.account.account');
});

Route::get('/account/dashboard', function () {
    return view('layouts.account.account');
});

Route::get('/account/order-history', function () {
    return view('layouts.account.order-history');
});

Route::get('/account/profile', function () {
    return view('layouts.account.profile');
});

Route::get('/checkout', function () {
    return view('layouts.order.checkout');
});

Route::get('/cart', function () {
    return view('layouts.cart');
});

Route::get('/contact-us', function () {
    return view('layouts.contact-us');
});

Route::get('/terms', function () {
    return view('layouts.terms');
});

Route::get('/return-policy', function () {
    return view('layouts.return-policy');
});

Route::get('/faq', function () {
    return view('layouts.faq');
});

Route::get('/privacy-policy', function () {
    return view('layouts.privacy-policy');
});

Route::get('/about-us', function () {
    return view('layouts.about-us');
});

Route::get('/order/{id}', function ($id) {
    $orders = include resource_path('data/orders-array.blade.php');
    $order = collect($orders)->firstWhere('id', $id);

    if (!$order) {
        abort(404, 'Order not found.');
    }

    return view('layouts.order.order-view', ['order' => $order]);
});

Route::get('/product/view/{id}', function ($id) {
    $products = include resource_path('data/products-array.blade.php'); // load the products array

    // Find product by id
    $product = collect($products)->firstWhere('id', (int) $id);

    if (!$product) {
        abort(404, 'Product not found');
    }

    return view('layouts.product-view', ['product' => $product]);
});
