<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CheckLoginController;
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

route::resource('account', AccountController::class)->middleware('checkLogin');

route::get('/', [CheckLoginController::class,'index'])->name('login');