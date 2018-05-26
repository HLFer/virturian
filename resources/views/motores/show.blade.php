@extends('layouts.app')
<div class="imagem-fundo-detalhe"></div>
@section('content')


<div class="container">
<div class="card">
                
    <div id="top-card" class="card-header" align="center">Painel de Controle | Gestão de Motores</div><br>                 
    <div align="center"><h1>Detalhes do Motor  {{ $motores->id }}</h1></div>
    
    <div id="corpo-detalhes" class="jumbotron text-center">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Cod. Identificação</th>
                <th>Nome / Modelo</th>
                <th>Numero de Polos</th>
                <th>Tensão de rede(V)</th>
                <th>Regime de Serviço</th>
                <th>Corrente Nominal(A)</th>
                <th>Potência Nominal(W)</th>
                <th>Torque Máximo(Nm)</th>
            </tr>
        </thead>
   
        <tbody align="center">    
            <tr>              
                <td>{{ $motores->id }}</td>
                <td>{{ $motores->modelo }}</td>
                <td>{{ $motores->numero_de_polos }}</td>
                <td>{{ $motores->tensao_de_rede_v }}</td>
                <td>{{ $motores->regime_de_servico }}</td>
                <td>{{ $motores->corrente_nominal_a }}</td>
                <td>{{ $motores->potencia_nominal_w }}</td>
                <td>{{ $motores->torque_maximo_nm }}</td>
            </tr>
        </tbody>
    </table>
    </div>

    <div align="center"> <a class="btn btn-warning" href="/motores"> Voltar </a> </div><br>

</div>
</div>


@endsection

