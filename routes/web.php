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

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::get('/', 'AdminController@home')->name('admin.home');

    Route::get('/home', 'AdminController@home')->name('admin.home');

    Route::get('emprestimo/novo', 'EmprestimoController@novo')->name('emprestimo.novo');

    Route::get('emprestimo/baixa', 'EmprestimoController@baixa')->name('emprestimo.baixa');

    Route::get('item/categoria/nova', 'CategoriaItemController@nova')->name('item.categoria.nova');

    Route::get('item/novo', 'ItemController@novo')->name('item.novo');

    Route::get('conta/perfil', 'ContaController@perfil')->name('conta.perfil');

    Route::get('conta/senha', 'ContaController@senha')->name('conta.senha');

    Route::get('pessoa/nova', 'PessoaController@nova')->name('pessoa.nova');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();
