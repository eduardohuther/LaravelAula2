@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div><br>
    <center>
    <div>
        <a href="/mensagens" style="font-size: 30px">Mensagens</a><br>
        <a href="/atividades" style="font-size: 30px">Atividades</a><br>
    </div></center>
</div>
@endsection
