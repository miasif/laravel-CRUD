<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/categories/index", [CategoryController::class, 'index'])->name('category.index');
Route::get("/categories/create", [CategoryController::class, 'create'])->name('category.create');
Route::post("/categories/store", [CategoryController::class, 'store'])->name('category.store');
Route::get("/categories/{category}/edit", [CategoryController::class, 'edit'])->name('category.edit');
Route::put("/categories/{category}", [CategoryController::class, 'update'])->name('category.update');
Route::delete("/categories/{category}", [CategoryController::class, 'destroy'])->name('category.destroy');



// Product Routes
Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
