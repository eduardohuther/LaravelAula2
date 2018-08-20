<?php

namespace App\Http\Controllers;

use App\Mensagem;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        $listaMensagens = Mensagem::all();
        return view('mensagem.list',['mensagens' => $listaMensagens]);
    }
    public function show($id)
    {
        $Mensagem = Mensagem::find($id);
        return view('mensagem.show',['mensagens' => $Mensagem]);
    }
}
