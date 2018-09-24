<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'title' => 'Olá inicial',
            'description' => 'Olá mundo...',
            'author' => 'Tiago',
            'user_id' => 1,
            'atividade_id' => 1
        ]);
        Mensagem::create([
            'title' => 'Olá final',
            'description' => 'Olá mundo...final..',
            'author' => 'Maria',
            'user_id' => 1,
            'atividade_id' => 1
        ]);
    }
}
