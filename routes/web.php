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


Route::get('/', 'PostController@index');

Route::get('/posts/search', 'PostController@search');


//Route::group(['middleware' => 'auth'], function(){
    

    Route::get('/posts/create', 'PostController@create');
    
    Route::get('/posts/{post}/edit', 'PostController@edit');
    
    Route::put('/posts/{post}', 'PostController@update');
    
    Route::delete('/posts/{post}', 'PostController@delete');
    
    
    Route::post('/posts', 'PostController@store');
    
    Route::post('/posts/{post}/comments', 'CommentsController@store');
    
    Route::get('/user', 'UserController@index');
    

//});

Route::get('/posts/{post}', 'PostController@show');

Route::get('/subjects/{subject}', 'SubjectController@index');
    
Route::get('/grades/{grade}', 'GradeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
