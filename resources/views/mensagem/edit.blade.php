<center><h1>Formulário de Edição da Mensagem código {{$Mensagem->id}}</h1></center>
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

<form action="/mensagens/{{$Mensagem->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<b>Título: </b>		<input type="text" name="title" value="{{$Mensagem->title}}"> 	     <br>
	<b>Descrição:	</b>	<input type="text" name="description" value="{{$Mensagem->description}}">   <br>
	<b>Autor: </b> <input type="text" name="author" value="{{$Mensagem->author}}">   <br><br>
	<input type="submit" value="Salvar">
</form>
