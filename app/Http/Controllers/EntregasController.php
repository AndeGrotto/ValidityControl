<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use Illuminate\Http\Request;

class EntregasController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $entregas = Entrega::All();
        return view('entregas.list', ['entregas'=>$entregas]);
    }

    public function create() {
        return view('entregas.create');
=======
    public function index() {
        $entregas = Entrega::All();
        return view('entregas', ['entregas'=>$entregas]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
