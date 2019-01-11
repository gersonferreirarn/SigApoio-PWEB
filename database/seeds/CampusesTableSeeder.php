<?php

use Illuminate\Database\Seeder;
use App\Campus;
class CampusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Campus::create([
            'descricao' => 'UFRN Campus Caicó'
        ]);
    }
}
