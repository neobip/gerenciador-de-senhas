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
Route::get('/senhas/edit', 'SenhasController@editForm')->name('editSenha');
Route::post('/senhas/envia', 'SenhasController@envia');
Route::post('/senhas/delete', 'SenhasController@delete');
Route::get('senhas/index', 'SenhasController@index')->name('senha');


// --- [start route acessos] -- //
Route::get('/acessos/index', 'AcessoController@index');
//Route::get('acessos/get_datatable', 'AcessoController@get_datatable');
Route::get('/acessos/add', 'AcessoController@add')->name('add');
Route::get('acessos/edit', 'AcessoController@edit')->name('edit');
//Route::get('acessos/editacessos', 'AcessoController@edit')->name('edit');
Route::get('/acessos/del', 'AcessoController@del')->name('del');

Route::post('/acessos/envia', 'AcessoController@envia')->name('envia');

Route::get('acessos/index', 'AcessoController@index')->name('acesso');
Route::get('acessos/gridAcessosload', 'AcessoController@gridAcessosload')->name('gridAcessos');
// --- [end route acessos] -- /

// --- [start route usuarios] -- //
Route::get('/usuarios/index', 'UserController@index');
Route::get('/usuarios/add', 'UserController@addForm');
Route::get('/usuarios/edit', 'UserController@editForm');
Route::get('/usuarios/editPassword', 'UserController@editPasswordForm');
Route::post('/usuarios/envia', 'UserController@envia');
Route::get('usuarios/index', 'UserController@index')->name('usuario');
Route::get('usuarios/gridUsuariosload', 'UserController@gridUsuariosload')->name('gridUsuarios');
// --- [end route usuarios] -- /


