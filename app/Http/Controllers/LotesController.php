<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use Illuminate\Http\Request;

class LotesController extends Controller
{
    public function list() {
        $lotes = Lote::All();
        return view('lotes.list', ['lotes'=>$lotes]);
    }

    public function create() {
        return view('lotes.create');
    }
}

