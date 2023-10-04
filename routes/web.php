<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\LogAcessoMiddleware;

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
Route::get('/contatos/Sucesso','contatoSucessoController@principal')->name('site.contatoSucesso');
Route::get('/login/{erro?}','loginController@principal')->name('site.login');
Route::get('criarConta','criarContaController@principal')->name('site.criarConta');

Route::post('/login','loginController@autenticar')->name('site.login');
Route::post('criarConta','criarContaController@criar')->name('site.criarConta');
Route::post('/','ContatoController@save')->name('site.contatos');
Route::post('/contatos','ContatoController@save')->name('site.contatos');

Route::fallback(function(){return redirect()->route('site.principal');}); \

Route::middleware('autentificacao:padrao')->prefix('/store')->group(function(){ //server para criar grupos usando a url /store/algum
    Route::get('/home','homeController@principal')->name('store.home');
    Route::get('/sair','loginController@sair')->name('store.sair');
    Route::get('/cliente','clienteController@principal')->name('store.clientes');
    Route::get('/fornecedore','FornecedorController@index')->name('store.fornecedores');
    Route::get('/produto','produtoController@principal')->name('store.produtos');
});

// Route::get('/contatos/{name?}/{cat_id?}', function(string $name='nao enviado',int $cat_id=1){
//     echo "ola $name assunto $cat_id";
// })->where('cat_id','[0-9]+');
//quando o usuario errar vair cair aqui e podera ser redirecionado para a pagina principal
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



