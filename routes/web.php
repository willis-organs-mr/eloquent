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
    // return view('welcome');
    // dd($request->user());
    // access user and phone number relation
    // no need to access user_id as Eloquent knows
    // $request->user()->phoneNumber()->create([
    //     'phone_number' => '0123456789',
    // ]);
    // dd($request->user()->phoneNumber()->get());
    // $phoneNumber = PhoneNumber::find(1);

    $phoneNumber = new PhoneNumber;

    $phoneNumber->phone_number = '0123456789';
    $phoneNumber->user()->associate($request->user());
    $phoneNumber->save();
});

Auth::routes();

Route::get('/home', 'HomeController@index');
