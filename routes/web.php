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

Route::get('/', 'PostsController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ==========ここから追加する==========
//ユーザ編集画面
Route::get('/users/edit', 'UsersController@edit');
//ユーザ更新画面
Route::post('/users/update', 'UsersController@update');
// ==========ここまで追加する==========
// ==========ここから追加する==========
// ユーザ詳細画面
Route::get('/users/{user_id}', 'UsersController@show');
// ==========ここまで追加する==========

// ==========ここから追加する==========
//投稿新規画面
Route::get('/posts/new', 'PostsController@new')->name('new');

//投稿新規処理
Route::post('/posts','PostsController@store');

// ==========ここまで追加する==========
// ==========ここから追加する==========
//投稿削除処理
Route::get('/postsdelete/{post_id}', 'PostsController@destroy');
// ==========ここまで追加する==========
// ==========ここから追加する==========
//いいね処理
Route::get('/posts/{post_id}/likes', 'LikesController@store');

//いいね取消処理
Route::get('/likes/{like_id}', 'LikesController@destroy');
// ==========ここまで追加する==========
// ==========ここから追加する==========
//コメント投稿処理
Route::post('/posts/{comment_id}/comments','CommentsController@store');

//コメント取消処理
Route::get('/comments/{comment_id}', 'CommentsController@destroy');
// ==========ここまで追加する==========