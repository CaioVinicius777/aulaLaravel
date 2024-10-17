<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;


//user
Route::get('/cadastro_usuario', [UserController::class, 'formCriarUsuario']);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

Route::delete('/deletar_usuario/{id}', [UserController::class, 'deletar']);

Route::get('/editar_usuario/{id}', [UserController::class, 'formEditarUsuario']);

Route::put('/editar_usuario/{id}', [UserController::class, 'editar']);



//produto
Route::get('/cadastro_produto', [ProdutoController::class, 'formCriarProduto']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::get('/listar_produto', [ProdutoController::class, 'listar']);

Route::delete('/deletar_produto/{id}', [ProdutoController::class, 'deletar']);


//cliente
Route::get('/cadastro_cliente', [ClienteController::class, 'formCriarCliente']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);

Route::get('/listar_cliente', [ClienteController::class, 'listar']);


//vendedor
Route::get('/cadastro_vendedor', [VendedorController::class, 'formCriarVendedor']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);

Route::get('/listar_vendedor', [VendedorController::class, 'listar']);

Route::delete('/deletar_vendedor/{id}', [VendedorController::class, 'deletar']);

//App
Route::get('/', [AppController::class, 'Inicial']);