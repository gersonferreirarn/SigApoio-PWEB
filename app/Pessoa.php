<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Usuario;
use App\PessoaFisica;
use App\PessoaJuridica;

class Pessoa extends Model
{
    //
    public $timestamps = false;

    public function usuario(){
        return $this->hasOne(Usuario::class); #Relacionamento 1 para 1 de usuario com pessoa
    }

    public function pessoaFisica(){
        return $this->hasOne(PessoaFisica::class); #Relacionamento 1 para 1
    }

    public function pessoaJuridica(){
        return $this->hasOne(PessoaJuridica::class); #Relacionamento 1 para 1
    }
}
