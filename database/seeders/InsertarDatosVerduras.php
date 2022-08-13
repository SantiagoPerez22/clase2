<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//la linea de abajo se usa para poder interactuar con las bases de datos
use Illuminate\Support\Facades\DB;

class InsertarDatosVerduras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //bucle for para rellenar los datos de la base de datos
        //for($i=1; $i <= 10; $i++){
        //    DB::table('verduras')->insert(array(
        //        'nombre' => 'verdura'.$i,
        //        'precio' => $i * 999
        //    ));
        //
        //}
        //$this->command->info("Todo ok (y)");


        //insertar datos en duro
        DB::table('verduras')->insert(array(
            [
                'nombre'        =>  'apio',
                'precio'        =>   600,
                'almacen_id'    =>   1
            ],[
                'nombre'        =>   'palta',
                'precio'        =>   900,
                'almacen_id'    =>   2
            ],[          
                'nombre'        =>   'ajo',
                'precio'        =>   100,
                'almacen_id'    =>   1
            ]
            ));
            $this->command->info("Todo ok (y)");
    }
}
