<?php


use App\Http\Controllers\ValidatController;
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

// Task: 1
Route::post('/register', [ValidatController::class, 'registerValidate']);


// Task: 2
Route::get('/home', function(){
    return redirect('/dashboard', 302);
});


//Task:3 [This task completed in LogsRequestMiddleware with Kernel.php]


// Task:4
