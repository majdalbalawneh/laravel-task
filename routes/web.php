<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\TestController;

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
Route::get('/id/{id}/name/{name}', [TestController::class ,'CandyView']);  #render with controller

Route::get('/contact', function () {
    return view('layout/contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/group', function(){
    return view('testpage',['name1'=>'majd','name2'=>'hadi']); 
 });


Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});



Route::get('/signup', function () {
    return view('signup');
});

#2
Route::get('/newTest/id/{id}/user/{user}', [TestController::class,'Task2'])-> where('id', '[0-9]+');

#3
Route::get('/newTest/id/{id}/user/{user}', [TestController::class,'Task2'])-> where('user', '[A-z]+');


// Route::get('user/{id}', function ($id) {
//     //
// })->where('id', '[0-9]+');

// Route::get('user/{id}/{name}', function ($id, $name) {
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/home',[TestController::class,'home']);

Route::controller(testController::class)->group(function(){
    Route::get('/home','home');
    Route::get('/contact','contact');
    Route::get('/about','about');
    Route::get('/login','login');
    Route::get('/register','register');
    Route::get('/about','AboutArray');
});


Route::get('/home', [PostController::class, 'viewdata']);
Route::get('/home', [PostController::class, 'insert']);
Route::post('/home', [PostController::class, 'insert']);
