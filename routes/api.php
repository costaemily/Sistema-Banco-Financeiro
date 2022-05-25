<?php

//header('Access-Control-Allow-Origin: http://localhost:3000');
//header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
//header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\Api\EditoraApiController;
use App\Http\Controllers\Api\RoleApiController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\BancoController;
//use App\Http\Controllers\Api\EditoraApiController;

Route::prefix('editora')->group(function (){
    Route::get('/listar', [EditoraApiController::class, 'buscaPaginada']);//->name('editora.listar');
    //Route::get('/editora/listar/{nome}', [EditoraApiController::class, 'buscaPaginada']);
    Route::get('/incluir', [EditoraApiController::class, 'new']);
    Route::get('/alterar/{id}', [EditoraApiController::class, 'show']);
    Route::get('/excluir/{id}', [EditoraApiController::class, 'delete']);
    Route::get('/cancelar', [EditoraApiController::class, 'cancelar']);

    Route::post('/salvar', [EditoraApiController::class, 'create']);
    Route::post('/alterar/{id}', [EditoraApiController::class, 'store']);
    Route::post('/excluir/{id}', [EditoraApiController::class, 'excluir']);
});
Route::get('/autor/listar', [AutorController::class, 'index']);
Route::get('/autor/buscar', [Autorcontroller::class, 'show']);
Route::post('/autor/salvar', [AutorController::class, 'create']);



Route::prefix('roles')->group(function (){
    Route::get('/listar', [RoleApiController::class, 'buscaPaginada']);//->name('editora.listar');
    //Route::get('/editora/listar/{nome}', [EditoraApiController::class, 'buscaPaginada']);
    Route::get('/incluir', [RoleApiController::class, 'new']);
    Route::get('/alterar/{id}', [RoleApiController::class, 'show']);
    Route::get('/excluir/{id}', [RoleApiController::class, 'delete']);
    Route::get('/cancelar', [RoleApiController::class, 'cancelar']);

    Route::post('/salvar', [RoleApiController::class, 'create']);
    Route::post('/alterar/{id}', [RoleApiController::class, 'store']);
    Route::post('/excluir/{id}', [RoleApiController::class, 'excluir']);
});

Route::prefix('usuario')->group(function (){
    Route::get('/listar', [UserApiController::class, 'buscaPaginada']);//->name('editora.listar');
    //Route::get('/editora/listar/{nome}', [EditoraApiController::class, 'buscaPaginada']);
    Route::get('/incluir', [UserApiController::class, 'new']);
    Route::get('/alterar/{id}', [UserApiController::class, 'show']);
    Route::get('/excluir/{id}', [UserApiController::class, 'delete']);
    Route::get('/cancelar', [UserApiController::class, 'cancelar']);

    Route::post('/salvar', [UserApiController::class, 'create']);
    Route::post('/alterar/{id}', [UserApiController::class, 'store']);
    Route::post('/excluir/{id}', [UserApiController::class, 'excluir']);
});

Route::prefix('banco')->group(function (){
    Route::get('/banco/listar', [BancoController::class, 'index'])->name('banco.listar');
    Route::get('/banco/incluir', [BancoController::class, 'new']);
    Route::get('/banco/alterar/{id}', [BancoController::class, 'show']);
    Route::get('/banco/excluir/{id}', [BancoController::class, 'delete']);
    Route::get('/banco/cancelar', [BancoController::class, 'cancelar']);

    Route::post('/banco/salvar', [BancoController::class, 'create']);
    Route::post('/banco/alterar/{id}', [BancoController::class, 'store']);
    Route::post('/banco/excluir/{id}', [BancoController::class, 'excluir']);
});



