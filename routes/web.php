<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/types', function () {

    $type = \App\Type::find(2);
    return $type->posts;
});
Route::get('/users', function () {
    return \App\User::all();
});

Route::get('/posts', function () {

    return \App\Post::all();
});

Route::get('/stores', function () {
    $store = \App\Store::find(5);
    return $store->users;
});

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
