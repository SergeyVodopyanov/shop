<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', \App\Http\Controllers\Main\IndexController::class)->name('main.index');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
        Route::post('/', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
        Route::get('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('category.show');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
        Route::patch('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category.delete');
    });
});

