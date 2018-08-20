<h1>Lista de Mensagens</h1>
<hr>
@foreach($lmsg as $msg)
	<h3><p>{{$msg->title}}</p></h3>
	<p>{{$msg->author}}</p>
	<p>{{$msg->description}}</p>
	<br>
@endforeach