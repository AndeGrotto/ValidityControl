<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use Illuminate\Http\Request;

class ItensPedidosController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $itensPedidos = ItensPedido::All();
        return view('itensPedidos.list', ['itensPedidos'=>$itensPedidos]);
    }

    public function create() {
        return view('itensPedidos.create');
=======
    public function index() {
        $itensPedidos = ItensPedido::All();
        return view('itensPedidos', ['itensPedidos'=>$itensPedidos]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
