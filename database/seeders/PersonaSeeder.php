<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
           'nombre'=>'Juani ',
           'apellidos'=>'alcachofa',
            'ci'=>'454545',
            'sexo'=>'masculino',
            'celular'=>'66666'
        ]);
    }
}
