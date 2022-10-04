<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    public function index() {
        $motoristas = Motorista::All();
        return view('motoristas', ['motoristas'=>$motoristas]);
    }
}
