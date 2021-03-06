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

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');
Route::get('them-text-mau','TextmauController@GetThem');
Route::post('them-text-mau','TextmauController@PostThem')->name('themtext');
Route::get('danh-sach-text-mau','TextmauController@GetDanhsach');
Route::get('xoa-text-mau/{id}','TextmauController@Delete');
Route::post('sua-text-mau/{id}','TextmauController@Edit');
