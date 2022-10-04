<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristasController extends Controller
{
    public function list() {
        $motoristas = Motorista::All();
        return view('motoristas.list', ['motoristas'=>$motoristas]);
    }

    public function create() {
        return view('motoristas.create');
    }
}
