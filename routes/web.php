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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Lbc basics
App\Lbc\LaravelBootstrapComponents::init();

// abc.com/lbc if you want to have the docs for it
App\Lbc\LaravelBootstrapComponents::initDocs();

// Lbc theme liara (abc.com/liara)
// App\Lbc\LaravelBootstrapComponents::initThemeLiara();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');

Route::get('/donate', [App\Http\Controllers\DonateController::class, 'index'])->name('donate');

Route::get('/register-child', [App\Http\Controllers\RegChildController::class, 'index'])->name('register-child');

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
