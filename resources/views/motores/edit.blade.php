
@extends('layouts.app')
<div class="imagem-fundo-editar"></div>
@section('content')
<div class="container">
<div class="card">
                
        <div id="top-card" class="card-header" align="center">Painel de Controle | Edição de Motor</div>
                                        
                      <h1 align="center">Editar Motor {{$motores->id}}</h1>
                      
                      <form action="/motores/{{ $motores->id }}" method="POST" align="center">
                          

                          <h5>Nome | Modelo: <input type="text" name="modelo" value="{{ $motores->modelo }}" placeholder="digite o novo nome/modelo"><h5>
                          <h5>Nome | Modelo atual: {{ $motores->modelo }}</h5>
                          {{ ($errors->has('modelo')) ? $errors->first('modelo') : '' }}<br>

                          <h5>Número de polos atual: {{ $motores->numero_de_polos }}</h5>
                          <input type="radio" name="numero_de_polos" value="2"> 2
                          <input type="radio" name="numero_de_polos" value="4"> 4
                          <input type="radio" name="numero_de_polos" value="6"> 6
                          <input type="radio" name="numero_de_polos" value="8"> 8
                          {{ ($errors->has('numero_de_polos')) ? $errors->first('numero_de_polos') : '' }}<br>
                          
                          <div>
                          <h5>Tensão de rede atual: {{ $motores->tensao_de_rede_v }}V</h5>
                          <input type="radio" name="tensao_de_rede_v" value="220"> 220V
                          <input type="radio" name="tensao_de_rede_v" value="380"> 380V
                          <input type="radio" name="tensao_de_rede_v" value="440"> 440V
                          {{ ($errors->has('tensao_de_rede_v')) ? $errors->first('tensao_de_rede_v') : '' }}<br>
                          </div>

                          <h5>Regime de serviço atual: {{ $motores->regime_de_servico }}</h5>
                          <input type="radio" name="regime_de_servico" value="S1"> S1
                          <input type="radio" name="regime_de_servico" value="S2"> S2
                          <input type="radio" name="regime_de_servico" value="S3"> S3
                          <input type="radio" name="regime_de_servico" value="S4"> S4
                          <input type="radio" name="regime_de_servico" value="S5"> S5
                          {{ ($errors->has('regime_de_servico')) ? $errors->first('regime_de_servico') : '' }}<br> 

                          <h5>Corrente nominal atual: {{ $motores->corrente_nominal_a }}A</h5>
                          <input type="number" name="corrente_nominal_a" value="">
                          {{ ($errors->has('corrente_nominal_a')) ? $errors->first('corrente_nominal_a') : '' }}<br>
                          
                          <h5>Potência nominal atual: {{ $motores->potencia_nominal_w }}W</h5>
                          <input type="number" name="potencia_nominal_w" value="">
                          {{ ($errors->has('potencia_nominal_w')) ? $errors->first('potencia_nominal_w') : '' }}<br>
                          
                          <h5>Torque máximo atual: {{ $motores->torque_maximo_nm }}Nm</h5>
                          <input type="number" name="torque_maximo_nm" value="">
                          {{ ($errors->has('torque_maximo_nm')) ? $errors->first('torque_maximo_nm') : '' }}<br><br>

                          <div align="center">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-success" name="name" value="Editar"><br><br>
                            <a class="btn btn-warning" href="/motores">Voltar</a>
                          </div>
                      </form>

                     
                          
</div>
</div>

@endsection