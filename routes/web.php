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
//     return view('errors.maintenance');
// });
Route::get('/',function(){
    return view('index');
});

Auth::routes();
    Route::middleware(['UserMiddleware'])->group(function(){

        // Home
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/gallery','ImageController@getGallery');

        // Post
        Route::post('/publish', 'PostController@postPublish');
        Route::post('/publishPost', 'PostController@publishPost');
        Route::post('/deletePost','PostController@deletePost');
        Route::post('/editPost','PostController@editPost');

        // Like
        Route::post('/like', 'LikeController@postLike');
        Route::post('/unlike', 'LikeController@postDislike');

        // Comment
        Route::post('/comment','CommentController@postComment');
        Route::post('/deleteComment', 'CommentController@deleteComment');
        Route::post('/editComment','CommentController@editComment');

        //Search
        Route::post('/search','SearchController@postSearch');
        Route::get('/getSearch/{id}', 'SearchController@resultProfile');
        Route::get('/people', 'SearchController@getPeople');

        //Profile
        Route::get('/profile','ProfileController@getProfile');
        Route::post('/editProfilePicture', 'ProfileController@changeProfile');
        Route::post('/editProfile','ProfileController@editProfile');
        Route::get('/refresh','SearchController@refreshPeople');
});