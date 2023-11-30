<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItensPedidoRequest;
use App\Models\ItensPedido;
use Illuminate\Http\Request;

class ItensPedidosController extends Controller
{
    public function list() {
        $itensPedidos = ItensPedido::orderBy('id')->paginate(5);
        return view('itensPedidos.list', ['itensPedidos'=>$itensPedidos]);
    }

    public function create() {
        return view('itensPedidos.create');
    }

    public function store(ItensPedidoRequest $request) {
        $novo_itenspedido = $request->all();
        ItensPedido::create($novo_itenspedido);

        return redirect()->route('itensPedidos');
    }

    public function destroy($id) {
        try{    
            ItensPedido::find($id)->delete();
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
        $itensPedido = ItensPedido::find($id);
        return view('itensPedidos.edit', compact('itensPedido'));
    }

    public function update(ItensPedidoRequest $request, $id) {
        ItensPedido::find($id)->update($request->all());
        return redirect()->route('itensPedidos');
    }
}
