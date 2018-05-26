@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div id="top-card" class="card-header" align="center">Painel de Controle | Gestão de Motores</div>
             
                                   
                    <div class="col-lg-12 text-center">
                        <h2 id="titulo-tabela" class="section-heading">Motores Cadastrados</h2>
                    </div>

                    <div id="tabela" class="" align="center">
                        <table class="table table-responsive table-bordered table-striped table-dark header-fixed">
                            <thead align="center">
                                <tr>
                                    <th>Cod. Identificação</th>
                                    <th>Nome Modelo</th>
                                    <th>Número de Polos</th>
                                    <th>Tensão de Rede (V)</th>
                                    <th>Regime de Serviço</th>
                                    <th>Corrente Nominal (A)</th>
                                    <th>Potência Nominal (W)</th>
                                    <th>Torque Máximo (Nm)</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody align="center">    
                            @foreach($todosmotores as $motor)
                                <tr>
                                    <td>{{ $motor->id }}</td>
                                    <td>{{ $motor->modelo }}</td>
                                    <td>{{ $motor -> numero_de_polos }}</td>
                                    <td>{{ $motor -> tensao_de_rede_v }}</td>
                                    <td>{{ $motor -> regime_de_servico }}</td>
                                    <td>{{ $motor -> corrente_nominal_a }}</td>
                                    <td>{{ $motor -> potencia_nominal_w }}</td>
                                    <td>{{ $motor -> torque_maximo_nm }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="/motores/{{ $motor->id }}">Ver Detalhes</a>
                                        <a class="btn btn-primary" href="/motores/{{ $motor->id }}/edit">Editar Motor</a>
                                        
                                        <form action="{{ url('motores', [$motor->id]) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" name="name"  class="btn btn-danger" value="Deletar Motor">
                                        </form>
                                    
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            
                        </table>
                        <div>
                            {{ Session::get('message') }}
                        </div>
                        <div id="botao-cadastrar" >
                            <a class="btn btn-success" href="/motores/create">Cadastrar novo Motor</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
