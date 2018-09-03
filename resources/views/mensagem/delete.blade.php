<h1>Excluir Registro</h1>
<hr>
<form action="/mensagens/{{$Mensagem->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<p>Você realmente deseja excluir o registro {{$Mensagem->id}}?</p>
	<input type="submit" value="Deletar">
</form>