<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function principal(){
        return view('site.login');
    }

    public function autenticar(Request $request){
        $regras = [
            'login'=>'required|email',
            'password'=>'required'
        ];
        $retornos = [
            'login.email'=>'o usuario deve ser um email cadastrado',
            'login.required'=>'esse campo deve ser preenchido',
            'password.required'=>'esse campo deve ser preenchido'
        ];
        $request->validate($regras,$retornos);
    }
}
