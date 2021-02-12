<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([

            'nombre'=>'Accion',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('categorias')->insert([

            'nombre'=>'Aventuras',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('categorias')->insert([

            'nombre'=>'RPG',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('categorias')->insert([

            'nombre'=>'Shooter',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('categorias')->insert([

            'nombre'=>'Batle Royal',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('categorias')->insert([

            'nombre'=>'Batle Royal',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);

    }
}
