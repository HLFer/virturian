@extends('layouts.app')

@section('content')
<div class="imagem-fundo-home"></div>

<div class="container">
<div class="card">
                
    <div id="top-card" class="card-header" align="center">Painel de Controle</div>
             
    <div class="text-center"><h2 id="titulo-tabela" class="section-heading">Motores Cadastrados no Sistema</h2></div>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>#Id</th>
                <th>Nome / Modelo</th>
                <th>Ações</th>
            </tr>
        </thead>
   
        <tbody>    
        @foreach($todosmotores as $motor)
            <tr>              
                <td>{{ $motor->id }}</td>
                <td>{{ $motor->modelo }}</td>
                <td><a class="btn btn-warning" href="/motores/{{ $motor->id }}">Ver Detalhes</a><br><a class="btn btn-primary" href="/motores/{{ $motor->id }}/edit">Editar Motor</a><br><form action="{{ url('motores', [$motor->id]) }}" method="POST"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="submit" name="name"  class="btn btn-danger" value="Deletar Motor"><br></form></td>                 
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>{{ Session::get('message') }}</div>
    <div id="botao-cadastrar"><a class="btn btn-success" href="/motores/create">Cadastrar novo Motor</a></div>

</div>
</div>


@endsection
