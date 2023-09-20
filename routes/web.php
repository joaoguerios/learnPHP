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

// Route::get('/', function () {
//     return 'hello world';
// });
Route::get('/','PrincipalController@principal');
// Route::get('/sobrenos', function () {
//     return 'sobre nos';
// });
Route::get('/sobrenos','SobreNosController@principal');
// Route::get('/contato', function () {
//     return 'contato';
// });
Route::get('/contatos','ContatoController@principal');