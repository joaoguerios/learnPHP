<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Usuario;

class criarContaController extends Controller
{
    public function principal(){
        return view('site.criarConta');
    }
    public function criar(Request $request){
        $regras = [
            'name'=>'required',
            'cpf'=>'required|min:11|max:11',
            'email'=>'required|email',
            'password'=>'required|min:7|max:14'
        ];
        $retornos = [
            'name.email'=>'o usuario deve ser um email cadastrado',
            'name.required'=>'esse campo deve ser preenchido',
            'cpf.required'=>'esse campo deve ser preenchido',
            'cpf.min'=>'esse campo deve ser preenchido apenas com os numeros do CPF',
            'cpf.max'=>'esse campo deve ser preenchido apenas com os numeros do CPF',
            'email.required'=>'esse campo deve ser preenchido',
            'email.email'=>'esse campo deve possuir um email valido',
            'password.required'=>'esse campo deve ser preenchido',
            'password.min'=>'a senha deve possuir pelo menos 7 caracteres',
            'password.max'=>'a senha deve possuir no maximo 14 caracteres'
        ];
        $request->validate($regras,$retornos);
        $contato=new Usuario();
        $contato->fill($request->all());
        $contato->save();
        return redirect()->route('site.login');
    }
}
