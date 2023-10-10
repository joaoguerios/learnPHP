<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function principal(){
        return view('store.fornecedores.fornecedores');
    }
    public function pesquisa(){
        return view('store.fornecedores.pesquisa');
    }
    public function criar(){
        return view('store.fornecedores.criar');
    }
}
