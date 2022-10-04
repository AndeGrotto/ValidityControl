<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
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
    }
}
