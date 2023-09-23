<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ContactController;
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
Route::get('/feedback', function () {
    return view('feedback');
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
        if(Auth::User()->Role==0){
        return view('dashboard');
    }else{
        return view('admin/index');
    }
    })->name('dashboard');
});


// routes/web.php

Route::get('/test', function () {
    return view('products.create');
});

Route::get('/products/create', 'App\Http\Controllers\ProductController@create');
Route::post('/products/', 'App\Http\Controllers\ProductController@store');

Route::get('/admin/products', 'App\Http\Controllers\AdminProductController@index')->name('admin.products.index')->middleware('check.user.role');
Route::get('/admin/products/approve/{id}', 'App\Http\Controllers\AdminProductController@approve')->name('admin.products.approve');
Route::get('/admin/products/reject/{id}', 'App\Http\Controllers\AdminProductController@reject')->name('admin.products.reject');


Route::get('/pending', 'App\Http\Controllers\ProductController@pendings')->name('products.pendings');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/', 'App\Http\Controllers\ProductController@index')->name('index');
Auth::routes();







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// contact
Route::post('/submit-contact', 'App\Http\Controllers\ContactController@store')->name('contact.store');

Route::get('/search', 'App\Http\Controllers\ProductController@search')->name('products.search');


Route::post('/feedback/store', 'App\Http\Controllers\FeedbackController@store')->name('feedback.store');
Route::get('/feedback', 'App\Http\Controllers\FeedbackController@feedback')->name('feedback');


Route::get('/admin/users', 'App\Http\Controllers\AdminController@userList')->name('admin.users')->middleware('check.user.role');
Route::delete('/admin/user/{id}', 'App\Http\Controllers\AdminController@deleteUser')->name('admin.user.delete');
Route::put('/admin/user/{id}', 'App\Http\Controllers\AdminController@updateUser')->name('admin.user.update');



