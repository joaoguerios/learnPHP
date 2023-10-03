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
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|email',
            'telefone'=>'required|min:11', //41991040301
            'motivo'=>'required'
        ],
        [
            'name.required'=>'o campo nome precisa ser preenchido',
            'name.max'=>'o campo nome deve ter no maximo 50 caracteres',
            'email.required'=>'o campo email precisa ser preenchido',
            'email.email'=>'digite um email valido',
            'telefone.required'=>'o campo telefone precisa ser preenchido',
            'telefone.max'=>'o campo telefone deve ter no minimo 11 caracteres',
            'motivo.required'=>'o campo motivo precisa ser preenchido'
        ]
    );
        $contato=new Contato();
        $contato->fill($request->all());
        $contato->save();
        return redirect()->route('site.contatoSucesso');
    }
}
