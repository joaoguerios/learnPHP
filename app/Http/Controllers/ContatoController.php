<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contato;

class ContatoController extends Controller
{
    public function principal(){
        // $contato=new Contato();
        // $contato->name=$request->input('name');
        // $contato->email=$request->input('email');
        // $contato->telefone=$request->input('telefone');
        // $contato->motivo=$request->input('motivo');
        // print_r($contato->getAttributes());
        // $contato->save();
        
        
        // $contato->fill($request->all());
        // $contato->save();
        return view('site.contatos');
    }

    public function save(Request $request){
        $contato=new Contato();
        $contato->fill($request->all());
        print_r($contato->getAttributes());
    }
}
