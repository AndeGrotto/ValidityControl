<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnderecoRequest;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecosController extends Controller
{

    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $enderecos = Endereco::orderBy('id')->paginate(5);
        else
            $enderecos = Endereco::where('cidade','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('enderecos?desc_filtro='.$filtragem);
 
        return view('enderecos.list', ['enderecos'=>$enderecos]);
    }

    public function create() {
        return view('enderecos.create');
    }

    public function search() {
        return view('enderecos.search');
    }

    public function store(EnderecoRequest $request) {
        $novo_endereco = $request->all();
        Endereco::create($novo_endereco);
        return redirect()->route('enderecos');
    }

    public function destroy($id) {
        try{    
            Endereco::find($id)->delete();
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
        $endereco = Endereco::find($id);
        return view('enderecos.edit', compact('endereco'));
    }

    public function update(EnderecoRequest $request, $id) {
        Endereco::find($id)->update($request->all());
        return redirect()->route('enderecos');
    }






    /*public function search_cep (
        Request $request
    ) {
        $cep = $request->input('cep');
        // dd($cep);
        $response = Http::get('viacep.com.br/ws/$cep/json/')->json();
        // dd($response);

        return view('enderecos')->with (
            [
                'cep' => $request->input('cep'),
                'logradouro' => $response['logradouro'],
                'bairro' => $response['bairro'],
                'cidade' => $response['localidade'],
                'estado' => $response['uf']
            ]
        );    
    }

    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $enderecos = Endereco::orderBy('id')->paginate(5);
        else
            $enderecos = Endereco::where('cidade','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('enderecos?desc_filtro='.$filtragem);
 
        return view('enderecos.list', ['enderecos'=>$enderecos]);
    }

    public function search() {
        return view('enderecos.search');
    }

    public function create() {
        return view('enderecos.create');
    }

    public function store(EnderecoRequest $request) {
        $novo_endereco = $request->all();
        Endereco::create($novo_endereco);
        return redirect()->route('enderecos');
    }

    public function destroy($id) {
        try{    
            Endereco::find($id)->delete();
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
        $endereco = Endereco::find($id);
        return view('enderecos.edit', compact('endereco'));
    }

    public function update(EnderecoRequest $request, $id) {
        Endereco::find($id)->update($request->all());
        return redirect()->route('enderecos');
    }*/





   /* public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $enderecos = Endereco::orderBy('id')->paginate(5);
        else
            $enderecos = Endereco::where('cidade','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('enderecos?desc_filtro='.$filtragem);
 
        return view('enderecos.list', ['enderecos'=>$enderecos]);
    }

    public function create() {
        return view('enderecos.create');
    }

    public function store(EnderecoRequest $request) {
        $novo_endereco = $request->all();
        Endereco::create($novo_endereco);
        return redirect()->route('enderecos');
    }

    public function destroy($id) {
        try{    
            Endereco::find($id)->delete();
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
        $endereco = Endereco::find($id);
        return view('enderecos.edit', compact('endereco'));
    }

    public function update(EnderecoRequest $request, $id) {
        Endereco::find($id)->update($request->all());
        return redirect()->route('enderecos');
    }*/

}
