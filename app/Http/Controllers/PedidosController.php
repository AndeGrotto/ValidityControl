<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function list() {
        $pedidos = Pedido::All();
        return view('pedidos.list', ['pedidos'=>$pedidos]);
    }

    public function create() {
        return view('pedidos.create');
    }

    public function store(Request $request) {
        $novo_pedido = $request->all();
        Pedido::create($novo_pedido);

        return redirect('pedidos/list');
    }
}
