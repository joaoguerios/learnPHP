<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Usuario;

class loginController extends Controller
{
    public function principal(Request $request){
        $erro = '';
        if($request->get('erro')==1){
            $erro = 'Usuario ou senha invalido';
        }else if($request->get('erro')==2){
            $erro='Necesario realizar o login para ter acesso a página';
        }
        
        return view('site.login',['erro'=>$erro]);
    }

    public function autenticar(Request $request){
        $regras = [
            'login'=>'required|email',
            'password'=>'required|min:7|max:14'
        ];
        $retornos = [
            'login.email'=>'o usuario deve ser um email cadastrado',
            'login.required'=>'esse campo deve ser preenchido',
            'password.required'=>'esse campo deve ser preenchido',
            'password.min'=>'a senha deve possuir pelo menos 7 caracteres',
            'password.max'=>'a senha deve possuir no maximo 14 caracteres'
        ];
        $request->validate($regras,$retornos);

        $email= $request->get('login');
        $password =$request->get('password');

        $user=new Usuario();
        $existe=$user->where('email',$email)->where('password',$password)->get()->first();
        if(isset($existe->email)){
            session_start();
            $_SESSION['nome']=$existe->name;
            $_SESSION['email']=$existe->email;
        }else{
            return redirect()->route('site.login',['erro'=>1]);
        }
    }
}
