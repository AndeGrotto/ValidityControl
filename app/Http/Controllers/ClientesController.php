<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function list() {
        $clientes = Cliente::All();
        return view('clientes.list', ['clientes'=>$clientes]);
    }

    public function create() {
        return view('clientes.create');
    }

    public function store(Request $request) {
        $novo_cliente = $request->all();
        Cliente::create($novo_cliente);

        return redirect('clientes/list');
    }
}
