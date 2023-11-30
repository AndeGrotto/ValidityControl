<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntregaRequest;
use App\Models\Entrega;
use Illuminate\Http\Request;

class EntregasController extends Controller
{
    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $entregas = Entrega::orderBy('id')->paginate(5);
        else
            $entregas = Entrega::where('id','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('entregas?desc_filtro='.$filtragem);
 
        return view('entregas.list', ['entregas'=>$entregas]);
    }

    public function create() {
        return view('entregas.create');
    }

    public function store(EntregaRequest $request) {
        $nova_entrega = $request->all();
        Entrega::create($nova_entrega);

        return redirect()->route('entregas');
    }

    public function destroy($id) {
        try{    
            Entrega::find($id)->delete();
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
        $entrega = Entrega::find($id);
        return view('entregas.edit', compact('entrega'));
    }

    public function update(EntregaRequest $request, $id) {
        Entrega::find($id)->update($request->all());
        return redirect()->route('entregas');
    }
}
