<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\PessoaFisica;
use App\Usuario;

class ContaController extends Controller
{
    public function perfil(){
        $email = auth()->user()->email;
        $idPessoa = auth()->user()->pessoa_id;
        $dadosPessoaFisica = PessoaFisica::all()->where('id', $idPessoa)->first();

        return view('admin.conta.perfil', compact('dadosPessoaFisica'), compact('email'));
    }

    public function senha(){
        return view('admin.conta.senha');
    }
}
