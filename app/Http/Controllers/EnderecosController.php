<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    public function list() {
        $enderecos = Endereco::All();
        return view('enderecos.list', ['enderecos'=>$enderecos]);
    }

    public function create() {
        return view('enderecos.create');
    }

    public function store(Request $request) {
        $novo_endereco = $request->all();
        Endereco::create($novo_endereco);

        return redirect('enderecos/list');
    }
}
