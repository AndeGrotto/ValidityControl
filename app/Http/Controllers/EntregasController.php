<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use Illuminate\Http\Request;

class EntregasController extends Controller
{
    public function list() {
        $entregas = Entrega::All();
        return view('entregas.list', ['entregas'=>$entregas]);
    }

    public function create() {
        return view('entregas.create');
    }
}
