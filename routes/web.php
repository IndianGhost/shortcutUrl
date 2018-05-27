<?php
use \App\User;
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

Route::view('/', 'Post.index')->name('homePage');

Route::view('/link', 'Post.linkNotFound')->name('linkNotFound');

Route::post('/link', [
    'uses'  =>  'LinkController@create',
    'as'    =>  'createLink'
]);

Route::get('/link/{id}', [
    'uses'  =>  'LinkController@read',
    'as'    =>  'readLink'
])->where(
    'id', '[0-9]+'
);
Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');