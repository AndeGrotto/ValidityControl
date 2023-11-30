<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoRequest;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $pedidos = Pedido::orderBy('id')->paginate(5);
        else
            $pedidos = Pedido::where('dataPedido','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('pedidos?desc_filtro='.$filtragem);
 
        return view('pedidos.list', ['pedidos'=>$pedidos]);
    }

    public function create() {
        return view('pedidos.create');
    }

    public function store(PedidoRequest $request) {
        $novo_pedido = $request->all();
        Pedido::create($novo_pedido);

        return redirect()->route('pedidos');
    }

    public function destroy($id) {
        try{    
            Pedido::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        }catch(\Illuminate\Database\QueryException $e){
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        catch (\PDOException $e){
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id) {
        $pedido = Pedido::find($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(PedidoRequest $request, $id) {
        Pedido::find($id)->update($request->all());
        return redirect()->route('pedidos');
    }
}
