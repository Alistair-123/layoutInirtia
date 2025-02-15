<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return inertia('Welcome');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/products', [ProductController::class, 'index']);

