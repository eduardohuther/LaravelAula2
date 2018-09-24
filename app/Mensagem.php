<?php

namespace App;
use App\Atividade;

use Illuminate\Database\Eloquent\Model;

class mensagem extends Model
{
    protected $table = 'mensagens';
    public function atividade(){
    	return $this->belongsTo(Atividade::class);
    }
}
