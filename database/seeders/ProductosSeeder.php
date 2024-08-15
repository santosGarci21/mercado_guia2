<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DEfinimos el arreglo de datos a insertar 
        $data = array([
            'nombre'=>'Zapatos',
            'precio'=>59.99,
            'marca'=> 1,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Camisa',
            'precio'=>35.19,
            'marca'=> 2,
            'created_at'=>Carbon::now()
        ]);

        //insertamos la data en la tabla productos
        DB::table('productos')->insert($data);
    }
}
