<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TexturesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ColorController;

use App\Http\Controllers\Admin\TagController;







use App\Http\Controllers\Admin\ShippingController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('products', ProductController::class);
        Route::resource('textures', TexturesController::class);
        Route::resource('categories', CategoriesController::class);
        Route::resource('brands', BrandController::class)->parameters(['brands' => 'brand:id']);


        Route::resource('tags', TagController::class);
        Route::resource('colors', ColorController::class);












        Route::resource('shippings', ShippingController::class);


    });



require __DIR__ . '/auth.php';
