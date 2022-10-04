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
}
