<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\BancoController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/autor/listar', [AutorController::class, 'index']);
Route::get('/autor/buscar', [Autorcontroller::class, 'show']);
Route::post('/autor/salvar', [AutorController::class, 'create']);

Route::get('/editora/listar', [EditoraController::class, 'index'])->name('editora.listar');
Route::get('/editora/incluir', [EditoraController::class, 'new']);
Route::get('/editora/alterar/{id}', [EditoraController::class, 'show']);
Route::get('/editora/excluir/{id}', [EditoraController::class, 'delete']);
Route::get('/editora/cancelar', [EditoraController::class, 'cancelar']);

Route::post('/editora/salvar', [EditoraController::class, 'create']);
Route::post('/editora/alterar/{id}', [EditoraController::class, 'store']);
Route::post('/editora/excluir/{id}', [EditoraController::class, 'excluir']);


Route::get('/banco/listar', [BancoController::class, 'index'])->name('banco.listar');
Route::get('/banco/incluir', [BancoController::class, 'new']);
Route::get('/banco/alterar/{id}', [BancoController::class, 'show']);
Route::get('/banco/excluir/{id}', [BancoController::class, 'delete']);
Route::get('/banco/cancelar', [BancoController::class, 'cancelar']);

Route::post('/banco/salvar', [BancoController::class, 'create']);
Route::post('/banco/alterar/{id}', [BancoController::class, 'store']);
Route::post('/banco/excluir/{id}', [BancoController::class, 'excluir']);

Route::get('/conta/index', [ContaController::class, 'index']);