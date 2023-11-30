<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoteRequest;
use App\Models\Lote;
use Illuminate\Http\Request;

class LotesController extends Controller
{
    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $lotes = Lote::orderBy('id')->paginate(5);
        else
            $lotes = Lote::where('quantidadeProduto','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('lotes?desc_filtro='.$filtragem);
 
        return view('lotes.list', ['lotes'=>$lotes]);
    }

    public function create() {
        return view('lotes.create');
    }

    public function store(LoteRequest $request) {
        $novo_lote = $request->all();
        Lote::create($novo_lote);

        return redirect()->route('lotes');
    }

    public function destroy($id) {
        try{    
            Lote::find($id)->delete();
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
        $lote = Lote::find($id);
        return view('lotes.edit', compact('lote'));
    }

    public function update(LoteRequest $request, $id) {
        Lote::find($id)->update($request->all());
        return redirect()->route('lotes');
    }
}

