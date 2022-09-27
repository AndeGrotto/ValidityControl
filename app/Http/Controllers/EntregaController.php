<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use Illuminate\Http\Request;

class EntregaController extends Controller
{
    public function index() {
        $entregas = Entrega::All();
        return view('entregas', ['entregas'=>$entregas]);
    }
}
