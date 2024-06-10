<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::get('/', function () {
    return view('welcome');
})->name(name:'home');

//Route::get(uri:'/login',function(){
   // return view(view:'login');
//});

Route::get('/login', [AuthManager::class,'login'])->name(name:'login');
Route::post('/login', [AuthManager::class,'loginPost'])->name(name:'login.post');
Route::get('/registration', [AuthManager::class,'registration'])->name(name:'registration');
Route::post('/registration', [AuthManager::class,'registrationPost'])->name(name:'registration.post');
Route::get('/logout',[AuthManager::class,'logout'])->name(name:'logout');

Route::group(['middleware' => 'auth' ],function(){
   Route::get('/profile', function () {
    return 'Welcome  😊';
});
  
});

