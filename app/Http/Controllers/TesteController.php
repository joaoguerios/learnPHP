<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2)
    {
        $resultado = $p1 + $p2;
        return "O resultado de $p1 + $p2 = $resultado";
    }
}

