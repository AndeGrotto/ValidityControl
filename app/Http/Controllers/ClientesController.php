<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $clientes = Cliente::All();
        return view('clientes.list', ['clientes'=>$clientes]);
    }

    public function create() {
        return view('clientes.create');
=======
    public function index() {
        $clientes = Cliente::All();
        return view('clientes', ['clientes'=>$clientes]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
