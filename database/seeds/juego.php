<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class juego extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juegos')->insert([

            'nombre'=>'Zelda1',
            'direccion'=>'zelda1.com',
            'descripcion'=>'Zelda1',
            'precio'=>25.1,
            'categoria_id'=>1,
            'img'=> 'https://img1.freepng.es/20180417/jtq/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-the-legend-of-zelda-5ad60e099aab69.8338256615239777376335.jpg' ,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('juegos')->insert([

            'nombre'=>'Zelda2',
            'direccion'=>'zelda2.com',
            'descripcion'=>'Zelda123',
            'precio'=>25.1,
            'categoria_id'=>1,
            'img'=> 'https://img1.freepng.es/20180417/jtq/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-the-legend-of-zelda-5ad60e099aab69.8338256615239777376335.jpg' ,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('juegos')->insert([

            'nombre'=>'Zelda3',
            'direccion'=>'zelda3.com',
            'descripcion'=>'Zelda123',
            'precio'=>25.1,
            'categoria_id'=>1,
            'img'=> 'https://img1.freepng.es/20180417/jtq/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-the-legend-of-zelda-5ad60e099aab69.8338256615239777376335.jpg' ,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);
        DB::table('juegos')->insert([

            'nombre'=>'Zelda4',
            'direccion'=>'zelda4.com',
            'descripcion'=>'Zelda123',
            'precio'=>25.1,
            'categoria_id'=>1,
            'img'=> 'https://img1.freepng.es/20180417/jtq/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-the-legend-of-zelda-5ad60e099aab69.8338256615239777376335.jpg' ,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);

        DB::table('juegos')->insert([

            'nombre'=>'Zelda5',
            'direccion'=>'zelda5.com',
            'descripcion'=>'Zelda123',
            'precio'=>25.1,
            'categoria_id'=>1,
            'img'=> 'https://img1.freepng.es/20180417/jtq/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-the-legend-of-zelda-5ad60e099aab69.8338256615239777376335.jpg' ,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        ]);


    }
}
