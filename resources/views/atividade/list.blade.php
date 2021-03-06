@extends('layouts.app')
@section('contect')

<center><h1>Lista de Atividades</h1></center>
<hr>

  <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($atividades as $atividade)
	<h3>Título: <b><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a></b></h3>
  <p>Agendado para: <b>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</b></p>
	<p>Descrição: <b>{{$atividade->description}}</b></p>
  @auth
  <p>Ações: 
    <a href="/atividades/{{$atividade->id}}">Ver Mais</a> -
    <a href="/atividades/{{$atividade->id}}/edit">Editar</a> -
    <a href="/atividades/{{$atividade->id}}/delete">Deletar</a> 
  </p>
  @endauth
	<br>
@endforeach

{{ $atividades->links() }}

<br>
@auth
<h2><a href="/atividades/create">Criar novo registro</a></h2>
@endauth
