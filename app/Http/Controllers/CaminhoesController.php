<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaminhaoRequest;
use App\Models\Caminhao;
use Illuminate\Http\Request;

class CaminhoesController extends Controller
{
    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $caminhoes = Caminhao::orderBy('placa')->paginate(5);
        else
            $caminhoes = Caminhao::where('placa','like', '%'.$filtragem.'%')
                                    ->orderBy("placa")
                                    ->paginate(5)
                                    ->setpath('caminhoes?desc_filtro='.$filtragem);
 
        return view('caminhoes.list', ['caminhoes'=>$caminhoes]);
    }

    public function create() {
        return view('caminhoes.create');
    }

    public function store(CaminhaoRequest $request) {
        $novo_caminhao = $request->all();
        Caminhao::create($novo_caminhao);

        return redirect()->route('caminhoes');
    }

    public function destroy($id) {
    try{    
        Caminhao::find($id)->delete();
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
        $caminhao = Caminhao::find($id);
        return view('caminhoes.edit', compact('caminhao'));
    }

    public function update(CaminhaoRequest $request, $id) {
        Caminhao::find($id)->update($request->all());
        return redirect()->route('caminhoes');
    }

}
