<?php

use Illuminate\Database\Seeder;
use App\Usuario;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuario::create([
            'email' => 'gerson10caicorn@hotmail.com',
            'password' => bcrypt('123'),
            'pessoa_id' => 1
        ]);
    }
}
