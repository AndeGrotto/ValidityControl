<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use Illuminate\Http\Request;

class LotesController extends Controller
{
<<<<<<< HEAD
    public function list() {
        $lotes = Lote::All();
        return view('lotes.list', ['lotes'=>$lotes]);
    }

    public function create() {
        return view('lotes.create');
=======
    public function index() {
        $lotes = Lote::All();
        return view('lotes', ['lotes'=>$lotes]);
>>>>>>> d7f5c4e1064ee77c927837d6cfe87d3fc400d1e2
    }
}

