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

Route::get('/imovel', function () {
    return view('imovel');
});

Route::get('/detalhe', function () {
    return view('detalhe');
});

Route::get('/anunciar', function () {
    return view('anunciar');
});

Route::get('/auth/imovel', function () {
    return view('auth.imovel');
});
Route::get('/auth/adicionar-imovel', function () {
    return view('auth.adicionar-imovel');
});
Route::post('auth/adicionar-imovel', ['as' => 'auth.adicionar-imovel', 'uses' => 'ImovelController@store']);
Route::post('cidadeAjax', ['as' => 'cidadeAjax', 'uses' => 'ImovelController@cidadeAjax']);