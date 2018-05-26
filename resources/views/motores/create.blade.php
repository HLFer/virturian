
@extends('layouts.app')
<div class="imagem-fundo-criar"></div>
@section('content')

<div class="container">

            <div class="card">
                <div id="top-card" class="card-header" align="center">Painel de Controle | Gestão de Motores</div>
<h1>Cadastrar novo motor</h1>
    <hr>
     <form action="/motores" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Nome| Modelo Motor</label>
        <input type="text" class="form-control" id="modelo"  name="modelo">

        <label for="title">Numero de Polos</label>
        <input type="text" class="form-control" id="numero_de_polos"  name="numero_de_polos">

        <label for="title">Tensão de Rede(V)</label>
        <input type="text" class="form-control" id="tensao_de_rede_v"  name="tensao_de_rede_v">

        <label for="title">Regime de Serviço</label>
        <input type="text" class="form-control" id="regime_de_servico"  name="regime_de_servico">

        <label for="title">Corrente Nominal(A)</label>
        <input type="num" class="form-control" id="corrente_nominal_a"  name="corrente_nominal_a">

        <label for="title">Potência Nominal(W)</label>
        <input type="num" class="form-control" id="potencia_nominal_w"  name="potencia_nominal_w">

        <label for="title">Torque Máximo(Nm)</label>
        <input type="num" class="form-control" id="torque_maximo_nm"  name="torque_maximo_nm">

      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div align="center">
      <button type="submit" class="btn btn-success">Cadastrar</button><br><br>
      <a class="btn btn-warning" href="/motores">Voltar</a>
      </div>
    </form>

   </div> 
   </div> 
 
@endsection