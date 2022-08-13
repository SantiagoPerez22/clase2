<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosAlmacenes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacenes')->insert(array(
            [
                'nombre' => 'doña asdf',
                'direccion' => 'sua casa 1234'
            ],[
                'nombre' => 'loh cauros',
                'direccion' => 'papara pipiri pu 1234'
            ]
        ));
        $this->command->info("todo ok (y)");    
    }
}
