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



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/senhas/index', 'SenhasController@index');
Route::get('/senhas/add', 'SenhasController@addForm');
Route::get('/senhas/edit', 'SenhasController@editForm');
Route::post('/senhas/envia', 'SenhasController@envia');
Route::post('/senhas/delete', 'SenhasController@delete');
Route::get('senhas/index', 'SenhasController@index')->name('senha');


Route::get('/acessos/index', 'AcessoController@index');
//Route::get('acessos/get_datatable', 'AcessoController@get_datatable');
Route::get('/acessos/add', 'AcessoController@addForm');
Route::get('/acessos/edit', 'AcessoController@editForm');
Route::post('/acessos/envia', 'AcessoController@envia');
Route::get('acessos/index', 'AcessoController@index')->name('acesso');

Route::get('/usuarios/index', 'UserController@index');
Route::get('/usuarios/add', 'UserController@addForm');
Route::get('/usuarios/edit', 'UserController@editForm');
Route::get('/usuarios/editPassword', 'UserController@editPasswordForm');
Route::post('/usuarios/envia', 'UserController@envia');
Route::get('usuarios/index', 'UserController@index')->name('usuario');

