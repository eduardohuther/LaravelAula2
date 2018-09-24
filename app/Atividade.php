<?php

namespace App;
use App\Mensagem;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $table = 'atividades';
    public function mensagens(){
    	return $this->hasMany(Mensagem::class);
    }
}


