<?php

use Illuminate\Support\Facades\Route;
//use App\Mail\WelcomeMail;
//use Illuminate\Support\Facades\Mail;
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
/*
Route::get('/email', function () {
    
    //return view('welcome');

    Mail::to('email@email.com')->send(new WelcomeMail());

    return new WelcomeMail();
});*/

Route::get('/hello', function(){
    return view('subviews.hello');
});

Route::get('/customers','CustomerController@index');
Route::get('/consumers','ConsumerController@index');
Route::get('/consumers/create','ConsumerController@create');
Route::post('/consumers','ConsumerController@store');
Route::get('/consumers/{consumer}','ConsumerController@show');
Route::get('/consumers/{consumer}/edit','ConsumerController@edit');
Route::patch('/consumers/{consumer}','ConsumerController@update');
Route::delete('/consumers/{consumer}','ConsumerController@destroy');



?>