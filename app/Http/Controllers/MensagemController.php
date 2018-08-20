<?php

namespace App\Http\Controllers;

use App\Mensagem;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        $lmsg = Mensagem::all();
        return view('mensagem.list', ['lmsg' => $lmsg]);
    }
}
