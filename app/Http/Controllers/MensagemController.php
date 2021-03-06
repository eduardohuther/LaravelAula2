<?php

namespace App\Http\Controllers;

use App\Mensagem;
use App\Atividade;
use Illuminate\Http\Request;
use Validator, Input, Redirect;
use Illuminate\Support\Facades\Auth;

class MensagemController extends Controller
{
    public function index()
    {
        $mensagens = Mensagem::paginate(2);
        return view('mensagem.list',['mensagens' => $mensagens]);
    }
    public function create()
    {
        $atividades = Atividade::all();
        return view('mensagem.create', ['atividades' => $atividades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'title.required' => 'É obrigatório um título',
            'description.required' => 'É obrigatório uma descrição',
            'author.required' => 'É obrigatório um autor',
            );
        $regras = array(
            'title' => 'required|string|max:255',
            'description' => 'required',
            'author' => 'required|string',

            );
        $validador = Validator::make($request->all(), $regras, $messages);
        if ($validador->fails()){
            return redirect('mensagens/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        $obj_Mensagem = new Mensagem();
        $obj_Mensagem->title = $request['title'];
        $obj_Mensagem->description = $request['description'];
        $obj_Mensagem->author = $request['author'];
        $obj_Mensagem->user_id = Auth::id();
        $obj_Mensagem->atividade_id = $request['atividade_id'];
        $obj_Mensagem->save();
        return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!');
    }
    public function show($id)
    {
        $Mensagem = Mensagem::find($id);
        return view('mensagem.show',['mensagens' => $Mensagem]);
    }
    public function edit($id)
    {
        $obj_Mensagem = Mensagem::find($id);
        return view('mensagem.edit',['Mensagem' => $obj_Mensagem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = array(
            'title.required' => 'É obrigatório um título para a atividade',
            'description.required' => 'É obrigatória uma descrição para a atividade',
            'author.required' => 'É obrigatório o cadastro da data/hora da atividade',
        );

        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string|max:255',
            'description' => 'required',
            'author' => 'required|string',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect('mensagens/$id/edit')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        //se passou pelas validações, processa e salva no banco...
        $obj_Mensagem = Mensagem::findOrFail($id);
        $obj_Mensagem->title =       $request['title'];
        $obj_Mensagem->description = $request['description'];
        $obj_Mensagem->author = $request['author'];
        $obj_Mensagem->user_id = Auth::id();
        $obj_Mensagem->save();

        return redirect('/mensagens')->with('success', 'Mensagem alterada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_Mensagem = Mensagem::findOrFail($id);
        $obj_Mensagem->delete($id);
        return redirect('/mensagens')->with('sucess','Mensagem excluída com Sucesso!!');    
    }
    public function delete($id)
    {
        $obj_Mensagem = Mensagem::find($id);
        return view('mensagem.delete',['Mensagem' => $obj_Mensagem]);
    }
}
