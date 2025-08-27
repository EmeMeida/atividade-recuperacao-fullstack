<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return 'Bem-vindo à atividade de recuperação';
});

Route::get('/sobre', function () {
    return 'Nome: Emerson de Almeida Alves | Curso: Desenvolvimento Web | Descrição: Estudante dedicado, focado em aprender Laravel e desenvolvimento full stack.';
});

// Ajuste da rota /produtos para usar o controller
Route::get('/produtos', [ProdutoController::class, 'index']);
