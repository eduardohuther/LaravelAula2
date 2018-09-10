<center><h1>Formulário de Edição da Atividade código {{$atividade->id}}</h1></center>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/atividades/{{$atividade->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<b>Título: </b>		<input type="text" name="title" value="{{$atividade->title}}"> 	     <br>
	<b>Descrição:	</b>	<input type="text" name="description" value="{{$atividade->description}}">   <br>
	<b>Agendado para:  </b><input type="datetime-local" name="scheduledto" value="{{$atividade->scheduledto}}">   <br>
	<input type="submit" value="Salvar">
</form>
