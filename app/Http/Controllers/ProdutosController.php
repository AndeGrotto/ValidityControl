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

    public function store(Request $request) {
        $novo_produto = $request->all();
        Produto::create($novo_produto);

        return redirect('produtos/list');
    }
}
