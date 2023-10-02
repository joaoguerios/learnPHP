<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoSucessoController extends Controller
{
    public function principal(){
        return view('site.contatoSucesso');
    }
}
