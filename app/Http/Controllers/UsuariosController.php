<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $usuarios = Usuario::All();
        return view('usuarios.list', ['usuarios'=>$usuarios]);
    }

    public function create() {
        return view('usuarios.create');
    }

    public function store(Request $request) {
        $novo_usuario = $request->all();
        Usuario::create($novo_usuario);

        return redirect('usuarios/list');
=======
    public function index() {
        $usuarios = Usuario::All();
        return view('usuarios', ['usuarios'=>$usuarios]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}
