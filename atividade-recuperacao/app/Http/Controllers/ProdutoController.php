<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = [
            ['nome' => 'Teclado', 'preco' => 100],
            ['nome' => 'Mouse', 'preco' => 50],
            ['nome' => 'Monitor', 'preco' => 800],
        ];

        return view('produtos.index', compact('produtos'));
    }
}
