<?php

namespace App\Http\Controllers;

use App\Models\Caminhao;
use Illuminate\Http\Request;

class CaminhoesController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $caminhoes = Caminhao::All();
        return view('caminhoes.list', ['caminhoes'=>$caminhoes]);
    }

    public function create() {
        return view('caminhoes.create');
=======
    public function index() {
        $caminhoes = Caminhao::All();
        return view('caminhoes', ['caminhoes'=>$caminhoes]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
