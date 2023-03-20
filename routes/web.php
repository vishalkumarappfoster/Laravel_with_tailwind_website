<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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

Route::get('/', function () {
    return view('welcome');
    //return view('login');
    //return view('signup'); 
});


// Route::get('login', function () {
//     return view('login');
// });


// Route::get('signup', function () {
//     return view('signup');
// });


Route::get('dashboard', function () {
    return view('');
});
Route::get('/login', [CustomAuthController::class,'login']);
Route::get('/signup', [CustomAuthController::class,'signup']);
Route::post('/signup-user',[CustomAuthController::class,'signupUser'])->name('signup-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('Authcheck');
Route::get('/logout',[CustomAuthController::class,'logout']);