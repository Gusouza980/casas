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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/detalhe/{slug}', [\App\Http\Controllers\SiteController::class, 'detalhe'])->name("site.detalhe");

Route::get('/sistema/login', [\App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/sistema/logar', [\App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::middleware(['admin'])->group(function () {
    Route::get('/sistema/inicio', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/sistema/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");

    // ROTAS DE USUARIOS
    Route::get('/sistema/usuarios', [\App\Http\Controllers\UsuariosController::class, 'consultar'])->name("painel.usuarios");
    Route::get('/sistema/usuarios/cadastro', [\App\Http\Controllers\UsuariosController::class, 'cadastro'])->name("painel.usuario.cadastro");
    Route::post('/sistema/usuarios/cadastrar', [\App\Http\Controllers\UsuariosController::class, 'cadastrar'])->name("painel.usuario.cadastrar");
    Route::get('/sistema/usuarios/editar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'editar'])->name("painel.usuario.editar");
    Route::post('/sistema/usuarios/salvar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'salvar'])->name("painel.usuario.salvar");

    // ROTAS DE IMOVEIS
    Route::get('/sistema/imoveis', [\App\Http\Controllers\ImoveisController::class, 'consultar'])->name("painel.imoveis");
    Route::get('/sistema/imoveis/cadastro', [\App\Http\Controllers\ImoveisController::class, 'cadastro'])->name("painel.imoveis.cadastro");
    Route::post('/sistema/imoveis/cadastrar', [\App\Http\Controllers\ImoveisController::class, 'cadastrar'])->name("painel.imoveis.cadastrar");
    Route::get('/sistema/imoveis/editar/{imovel}', [\App\Http\Controllers\ImoveisController::class, 'editar'])->name("painel.imoveis.editar");
    Route::post('/sistema/imoveis/salvar/{imovel}', [\App\Http\Controllers\ImoveisController::class, 'salvar'])->name("painel.imoveis.salvar");
    Route::post('/sistema/imoveis/top/{imovel}', [\App\Http\Controllers\ImoveisController::class, 'top'])->name("painel.imoveis.top");

    // ROTA DE LOG
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});
