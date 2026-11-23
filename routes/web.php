<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/products/api', [ProductController::class, 'apiData'])
    ->name('products.api');

Route::resource('products', ProductController::class);