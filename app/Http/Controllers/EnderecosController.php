<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $enderecos = Endereco::All();
        return view('enderecos.list', ['enderecos'=>$enderecos]);
    }

    public function create() {
        return view('enderecos.create');
=======
    public function index() {
        $enderecos = Endereco::All();
        return view('enderecos', ['enderecos'=>$enderecos]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
