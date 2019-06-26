<?php

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

Auth::routes();

use Illuminate\Support\Facades\Input;
use App\DummyDetail;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
    return view('090722.Homepage');
});
 
Route::get('/RegisterStudent', function(){
    return view('090722.RegisterStudent');
});

Route::get("index","ProfileController@index");
Route::post("store/student","ProfileController@store");

Route::get('/FeeForm', function(){
    return view('090722.FeeForm');
});
Route::get("index","FeePaymentController@index");
Route::post("store","FeePaymentController@store");
 


Route::resource('profiles','ProfileController');
Route::resource('fee_payments','FeePaymentController'); 

//search route
//Route::any('/searcher',fuction(){
    //dd(Input::get('q'));
//});
Route::post('/search','FeePaymentController@search');