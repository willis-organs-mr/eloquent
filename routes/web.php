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
use App\PhoneNumber;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    
    // grab current users token
    // echo $request->user()->token->token;
    

});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/mailing/unsubscribe/{token}', 'Mailing\SubscriptionController@unsubscribe');
