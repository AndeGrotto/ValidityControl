<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $produtos = Produto::orderBy('id')->paginate(5);
        else
            $produtos = Produto::where('descricao','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('produtos?desc_filtro='.$filtragem);
 
        return view('produtos.list', ['produtos'=>$produtos]);
    }

    public function create() {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request) {
        $novo_produto = $request->all();
        Produto::create($novo_produto);

        return redirect()->route('produtos');
    }

    public function destroy($id) {
        try{    
            Produto::find($id)->delete();
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
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request, $id) {
        Produto::find($id)->update($request->all());
        return redirect()->route('produtos');
    }
}
