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


Route::get('/','PrincipalController@principal')->name('site.principal');
Route::get('/sobrenos','SobreNosController@principal')->name('site.sobrenos');
Route::get('/contatos','ContatoController@principal')->name('site.contatos');
Route::post('/contatos','ContatoController@principal')->name('site.contatos');
Route::get('/contatos/{name?}/{cat_id?}', function(string $name='nao enviado',int $cat_id=1){
    echo "ola $name assunto $cat_id";
})->where('cat_id','[0-9]+');
Route::get('/login',function(){
    return 'login';
})->name('site.login');
Route::get('/rota1','falhaController@principal')->name('site.rota1');
Route::fallback(function(){
    return redirect()->route('site.principal');
}); //quando o usuario errar vair cair aqui e podera ser redirecionado para a pagina principal
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');
// Route::get('/teste/{p1}/{p2}', function($p1,$p2){
//     echo "o resultado de $p1+$p2=".($p1+$p2);
// })->name('site.teste');

//redirecionamentos
// Route::get('/falha',function(){
//     echo "falha";
//     return redirect()->route('site.rota1');
// })->name('site.falha');
// Route::redirect('/falha','/rota1'); toda vez que falha for habilitado leva para rota1 
//parametros obrigatorios
// Route::get('/contatos/{nome}/{idade}/{assunto}', function($nome,$idade,$assunto){
//     echo "ola $nome voce tem $idade assunto $assunto";
// });

//colocando uma interrogacao nao sao obrigatorio

Route::prefix('/store')->group(function(){ //server para criar grupos usando a url /store/algum
    Route::get('/clientes',function(){
        return 'clientes';
    })->name('store.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('store.fornecedores');
    Route::get('/produtos',function(){
        return 'produtos';
    })->name('store.produtos');
});


