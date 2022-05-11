<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('pages.index');
});

Route::get('/single', function () {
    return view('market.singleProduct');
});


Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('delivery', [PagesController::class, 'delivery'])->name('delivery');
Route::get('privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('tc', [PagesController::class, 'tc'])->name('tc');
Route::get('faq', [PagesController::class, 'faq'])->name('faq');
Route::get('help', [PagesController::class, 'help'])->name('help');

Route::get('market', [PagesController::class, 'market'])->name('market');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); })->name('dashboard');
    Route::resource('/product', 'App\Http\Controllers\ProductsController');
    Route::get('sell', [PagesController::class, 'sell'])->name('sell');
});
