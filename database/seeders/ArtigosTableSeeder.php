<?php

namespace Database\Seeders;

use App\Models\Artigo;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtigosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artigo = Artigo::factory()->count(30)->create();
        /*DB::table('artigos')->insert([
            'titulo' => 'Sobre as seeds',
            'descricao' => 'Uso de seeds para criar dados',
            'conteudo' => 'A criação de dados através de seeds...',
            'slug' => 'sobre-as-seeds',
            'user_id' => 1,
            'created_at' => now(),
        ]);*/
    }
}
