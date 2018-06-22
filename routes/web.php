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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('index');
});

Auth::routes();
    Route::middleware(['UserMiddleware'])->group(function(){

        // Home
        Route::get('/home', 'HomeController@index')->name('home');

        // Post
        Route::post('/publish', 'PostController@postPublish');
        Route::post('/publishPost', 'PostController@publishPost');
        Route::post('/deletePost','PostController@deletePost');
        Route::patch('/editPost','PostController@editPost');

        // Like
        Route::post('/like', 'LikeController@postLike');
        Route::post('/unlike', 'LikeController@postDislike');

        // Comment
        Route::post('/comment','CommentController@postComment');
        Route::delete('/deleteComment', 'CommentController@deleteComment');
        Route::patch('/editComment','CommentController@editComment');

        //Search
        Route::post('/search','SearchController@postSearch');
        Route::get('/getSearch/{id}', 'SearchController@resultProfile');
        Route::get('/profile','ProfileController@getProfile');
        
});