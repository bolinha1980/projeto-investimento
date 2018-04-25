<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $variavel = "Homepage do sistema de gestão para grupos de investimento.";
        return view('welcome',[
            'title'=> $variavel //Passa o conteúdo da variável $variavel para a variável $title que está na página Welcome.blade.php
        ]);
    }
    public function cadastro()
    {
        echo "Tela de cadastro";
    }
    public function fazerLogin()
    {
        echo "Faz o login";
    }
}
