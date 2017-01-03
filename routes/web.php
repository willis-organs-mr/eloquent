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
use App\Post;
use Illuminate\Http\Request;

// Pull in Request so you can use User
Route::get('/', function (Request $request) {
    
    $topic = Topic::find(4);

    $post = new Post;
    $post->body = 'Reply three';
    $post->user()->associate($request->user());
    
    // $topic->posts()->save($post);
    // or
    $post->topic()->associate($topic);
    $post->save();
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/topics', 'TopicController@index');
Route::get('/posts', 'PostController@index');
Route::get('/topics/{topic}', 'TopicController@show')->name('topics.show');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::get('/user/topics', 'UserTopicController@index');
Route::get('/user/posts', 'UserPostController@index');
