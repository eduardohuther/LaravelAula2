<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $Mensagem)
	<h3><p><a href="/mensagens/{{$Mensagem->id}}">{{$Mensagem->title}}</a></p></h3>
	<p>{{$Mensagem->author}}</p>
	<p>{{$Mensagem->description}}</p>
	<br>
@endforeach