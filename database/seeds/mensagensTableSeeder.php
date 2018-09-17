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
        	'title'=>'bla',
        	'description'=>'bla',
        	'author'=>'bla',
            'user_id' => 1
        	]);

        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla',
            'user_id' => 1
            ]);

        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla',
            'user_id' => 1
            ]);

        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla',
            'user_id' => 1
            ]);

        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla',
            'user_id' => 1
            ]);
    }
}
