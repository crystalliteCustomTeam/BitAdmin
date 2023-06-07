<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
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
});



Route::post('/login-process',[LoginController::class,'login']);


Route::middleware(['loginChecker'])->group(function () {
    Route::get('/dashboard',[MainController::class,'index']);
    Route::get('/google',[MainController::class,'google']);
    Route::get('/facebook',[MainController::class,'facebook']);
    Route::get('/supersale',[MainController::class,'supersale']);
    Route::post('/google-proceess',[MainController::class,'googleadd']);
    Route::post('/facebook-proceess',[MainController::class,'facebookadd']);
    Route::get('/reviewDel/{id}',[MainController::class,'deleteReview']);
    Route::get('/logout', function (Request $request) {
        if($request->session()->has('USER')){
            $request->session()->flush();
            $request->session()->remove('USER');
            return redirect('/');
        }
    });
});
