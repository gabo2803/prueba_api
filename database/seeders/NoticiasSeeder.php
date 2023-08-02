<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            'titulo' => 'Título de la noticia 1',
            'contenido' => 'Contenido de la noticia 1...',
            'fecha_publicacion' => '2023-08-02',
            'autor' => 'Autor 1',
        ]);

        DB::table('noticias')->insert([
            'titulo' => 'Título de la noticia 2',
            'contenido' => 'Contenido de la noticia 2...',
            'fecha_publicacion' => '2023-08-03',
            'autor' => 'Autor 2',
        ]);

    }
}
