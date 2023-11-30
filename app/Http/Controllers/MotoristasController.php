<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotoristaRequest;
use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristasController extends Controller
{
    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $motoristas = Motorista::orderBy('id')->paginate(5);
        else
            $motoristas = Motorista::where('nome','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('motoristas?desc_filtro='.$filtragem);
 
        return view('motoristas.list', ['motoristas'=>$motoristas]);
    }

    public function create() {
        return view('motoristas.create');
    }

    public function store(MotoristaRequest $request) {
        $novo_motorista = $request->all();
        Motorista::create($novo_motorista);

        return redirect()->route('motoristas');
    }

    public function destroy($id) {
        try{    
            Motorista::find($id)->delete();
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
        $motorista = Motorista::find($id);
        return view('motoristas.edit', compact('motorista'));
    }

    public function update(MotoristaRequest $request, $id) {
        Motorista::find($id)->update($request->all());
        return redirect()->route('motoristas');
    }
}
