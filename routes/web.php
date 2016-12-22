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
use App\Topic;
use Illuminate\Http\Request;

// Pull in Request so you can use User
Route::get('/', function (Request $request) {
    $topic = new Topic;
    $topic->title = 'Topic four';
    $topic->user()->associate($request->user());

    $topic->save();
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/mailing/unsubscribe/{token}', 'Mailing\SubscriptionController@unsubscribe');
