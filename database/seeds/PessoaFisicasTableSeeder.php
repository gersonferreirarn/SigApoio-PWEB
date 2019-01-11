<?php

use Illuminate\Database\Seeder;

use App\PessoaFisica;

class PessoaFisicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PessoaFisica::create([
            'pessoa_id' => 1,
            'cpf' => '01676568484',
            'nome' => 'Gesson Brener',
            'data_nascimento' => '1999-03-15'
        ]);
    }
}
