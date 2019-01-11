<?php

use Illuminate\Database\Seeder;
use App\UsuarioCampusVinculo;

class UserCampusVinculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuarioCampusVinculo::create([
            'usuario_id' => 1,
            'campus_id' => 1,
            'ativo' => true
        ]);
    }
}
