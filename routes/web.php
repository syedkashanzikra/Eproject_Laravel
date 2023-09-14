<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// routes/web.php

Route::get('/test', function () {
    return view('products.create');
});

Route::get('/products/create', 'App\Http\Controllers\ProductController@create');
Route::post('/products/', 'App\Http\Controllers\ProductController@store');

Route::get('/admin/products', 'App\Http\Controllers\AdminProductController@index')->name('admin.products.index');
Route::get('/admin/products/approve/{id}', 'App\Http\Controllers\AdminProductController@approve')->name('admin.products.approve');
Route::get('/admin/products/reject/{id}', 'App\Http\Controllers\AdminProductController@reject')->name('admin.products.reject');

Route::get('/pending', 'App\Http\Controllers\ProductController@pendings')->name('products.pendings');




