<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home');

Route::get('/products', [ProductController::class, 'index'])
->name('products.index');

Route::get('/products/create',[ProductController::class, 'create'])
->name('products.create');

Route::post('/products/store',[ProductController::class, 'store'])
->name('products.store');

Route::get('/products/{products}',[ProductController::class, 'show'])
->name('products.show');

Route::get('/products/{products}/edit',[ProductController::class, 'edit'])
->name('products.edit');

Route::patch('/products/{product}/update',[ProductController::class, 'update'])
->name('products.update');
