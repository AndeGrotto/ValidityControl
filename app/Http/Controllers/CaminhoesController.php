<?php

namespace App\Http\Controllers;

use App\Models\Caminhao;
use Illuminate\Http\Request;

class CaminhoesController extends Controller
{
    public function list() {
        $caminhoes = Caminhao::All();
        return view('caminhoes.list', ['caminhoes'=>$caminhoes]);
    }

    public function create() {
        return view('caminhoes.create');
    }

    public function store(Request $request) {
        $novo_caminhao = $request->all();
        Caminhao::create($novo_caminhao);

        return redirect('caminhoes/list');
    }
}
