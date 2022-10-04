<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $pedidos = Pedido::All();
        return view('pedidos.list', ['pedidos'=>$pedidos]);
    }

    public function create() {
        return view('pedidos.create');
=======
    public function index() {
        $pedidos = Pedido::All();
        return view('pedidos', ['pedidos'=>$pedidos]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
