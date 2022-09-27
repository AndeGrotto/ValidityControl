<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use Illuminate\Http\Request;

class ItensPedidosController extends Controller
{
    public function index() {
        $itensPedidos = ItensPedido::All();
        return view('itensPedidos', ['itensPedidos'=>$itensPedidos]);
    }
}
