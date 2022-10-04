<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function list() {
        $produtos = Produto::All();
        return view('produtos.list', ['produtos'=>$produtos]);
    }

    public function create() {
        return view('produtos.create');
    }
}
