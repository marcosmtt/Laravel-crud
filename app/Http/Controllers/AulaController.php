<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    function mostra() {

        $cidade = "Pelotas";

        return view("exemplo3", ['cidade'=>$cidade]);
    }

    function promocao() {
        return view('promo');
    }

    function cadastro() {
        return view('cadastro');
    }

    function recebe(Request $request) {
        $nome = $request->nome;
        $email = $request->email;
        
        return "<h3>Nome: $nome - E-mail: $email</h3>";
    }
}
