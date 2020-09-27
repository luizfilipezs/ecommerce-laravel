<?php

namespace Database\Seeders;

use App\Models\Artigo;
use Illuminate\Database\Seeder;

class ArtigosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artigo::truncate();

        $faker = \Faker\Factory::create();

        $root = 'https://wnunes.s3-sa-east-1.amazonaws.com/capas_artigos/';
        $images = [
            $root.'Energia-solar-1030x686.jpg',
            $root.'barracao-painel-solar-1030x529.jpg',
            $root.'bigstock-Environment-Friendly-Solar-Pa-5377931-810x542.jpg'
        ];

        foreach ($images as $img) {
            Artigo::create([
                'imagem_capa' => $img,
                'titulo' => $faker->title,
                'descricao' => $faker->sentence,
                'conteudo' => $faker->text,
            ]);
        }
    }
}
