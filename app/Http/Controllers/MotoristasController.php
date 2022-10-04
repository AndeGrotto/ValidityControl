<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristasController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $motoristas = Motorista::All();
        return view('motoristas.list', ['motoristas'=>$motoristas]);
    }

    public function create() {
        return view('motoristas.create');
=======
    public function index() {
        $motoristas = Motorista::All();
        return view('motoristas', ['motoristas'=>$motoristas]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
