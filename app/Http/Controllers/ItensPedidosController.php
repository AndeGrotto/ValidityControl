<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use Illuminate\Http\Request;

class ItensPedidosController extends Controller
{
    public function list() {
        $itensPedidos = ItensPedido::All();
        return view('itensPedidos.list', ['itensPedidos'=>$itensPedidos]);
    }

    public function create() {
        return view('itensPedidos.create');
    }
}
