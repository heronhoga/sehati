<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware'=>'guest'], function() {
    Route::get('/', [AuthController::class, 'index'])->name('index');

    //LOGIN
    Route::get('/login', [AuthController::class, 'loginpage'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('loginpost');

    //REGISTER
    Route::get('/register', [AuthController::class, 'registerpage'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('registerpost');

}); 

Route::group(['middleware' => 'auth'], function() {
    //HOME
    Route::get('/home', [AuthController::class, 'homepage'])->name('home');

    //LOGOUT
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //PROFILE
    //--COMPLETE PROFILE
    Route::get('/profile', [ProfileController::class, 'profileindex'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'completeprofile'])->name('completeprofile');

    //--ADDING HEALTH DATA
    Route::post('/addhealth', [ProfileController::class, 'updateHealth'])->name('updatehealth');
});