<?php

use Illuminate\Database\Seeder;

use App\Pessoa;
use App\PessoaFisica;
use App\Usuario;
use App\UsuarioCampusVinculo;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # CRIA AUTOMATICAMENTE O PRIMEIRO USUARIO
        $this->call(CampusesTableSeeder::class);
        $this->call(PessoasTableSeeder::class);
        $this->call(PessoaFisicasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserCampusVinculosTableSeeder::class);

        #php artisan db:seed
    }
}
