<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'forn1',
                'status'=> 'S',
                'produto'=> 'maca',
                'ddd'=>'41',
                'telefone'=>'0000-0000'
            ],
            1 => [
                'nome' => 'forn2',
                'status'=> 'N',
                'produto'=> 'pera',
                'ddd'=>'44',
                'telefone'=>'0000-0000'
            ],
            2 => [
                'nome' => 'forn2',
                'status'=> 'S',
                'produto'=> 'banana',
                'ddd'=>'41',
                'telefone'=>'0000-0000'
            ]
        ];
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
