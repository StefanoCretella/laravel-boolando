<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = config('products');
    return view('welcome', compact('products'));
});

