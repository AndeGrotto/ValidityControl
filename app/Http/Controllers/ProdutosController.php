<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $produtos = Produto::All();
        return view('produtos.list', ['produtos'=>$produtos]);
    }

    public function create() {
        return view('produtos.create');
=======
    public function index() {
        $produtos = Produto::All();
        return view('produtos', ['produtos'=>$produtos]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
