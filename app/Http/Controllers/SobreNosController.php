<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller
{
    // public function __construct(){
    //     $this->middleware(LogAcessoMiddleware::class);
    // }
    public function principal(){
        return view('site.sobrenos');
    }
}
