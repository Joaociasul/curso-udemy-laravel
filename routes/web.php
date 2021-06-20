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
//     return "Rota principal";
// });
Route::get('/','PrincipalController@index')->name("site.index");
Route::get('/sobre-nos','SobreNosController@index')->name("site.sobre");
Route::get('/contato', "ContatoController@index")->name("site.contato");
Route::get('/login', "LoginController@index")->name("site.login");
Route::get('/teste/{p1}/{p2}', "TesteController@index")->name('teste');

Route::prefix('/app')->group(function(){
    Route::get('/produtos', "ProdutosController@index");
    Route::get('/fornecedores', "FornecedoresController@index");
    Route::get('/clientes', "ClientesController@index");
});

Route::fallback(function(){
    return redirect()->route('site.index');
});
//rotas com parametros

// Route::get ('/contato/{nome}/{email?}', function (string $nome, string $email = "joao@joao.com"){
//     echo "Olá $nome seu email é $email ";
// });

// expressoes regulares

// Route::get('/categoria/{nome}/{category_id}', 
//     function(string $nome, int $category_id)
//     {
//         echo "Seu nome é $nome e sua categoria é $category_id";
//     }
// )->where('category_id','[0-9]+')->where('nome','[A-Za-z]+'); //isto é uma expressão regular
//tratar um erro de tipagem sem dar erro do laravel mas um erro not found

