<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ValidatController;

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

// Task: 1
Route::post('/register', [ValidatController::class, 'registerValidate']);


// Task: 2
Route::get('/home', function(){
    return redirect('/dashboard', 302);
});


//Task:3 [This task completed in LogsRequestMiddleware with Kernel.php]


// Task:4
Route::middleware(['AuthMiddleware'])->group( function () {
    Route::get('/profile/{email}/{password}', [AuthController::class, 'AuthProfile']);
    Route::get('/setting/{email}/{password}', [AuthController::class, 'AuthSetting']);
});


// Task:5
Route::resource('products', ProductController::class);


// Task:6
Route::post('/contact', ContactController::class);


// Task:7
Route::resource('/products', PostController::class);


// Task 8:
Route::get( '/', function () {
    return view( 'welcome' );
} );

