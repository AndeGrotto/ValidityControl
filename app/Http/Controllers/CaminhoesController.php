<?php

namespace App\Http\Controllers;

use App\Models\Caminhao;
use Illuminate\Http\Request;

class CaminhoesController extends Controller
{
    public function index() {
        $caminhoes = Caminhao::All();
        return view('caminhoes', ['caminhoes'=>$caminhoes]);
    }
}
