
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
                
        <div id="top-card" class="card-header" align="center">Painel de Controle | Edição de Motor</div>
                                        
                      <h1 align="center">Editar Motor {{$motores->id}}</h1>
                      
                      <form action="/motores/{{ $motores->id }}" method="POST">
                          
                          <h5>Nome | Modelo atual: {{ $motores->modelo }}</h5>
                          <input type="text" name="modelo" value="{{ $motores->modelo }}" placeholder="Modelo">
                          {{ ($errors->has('modelo')) ? $errors->first('modelo') : '' }}<br><br>

                          <h5>Número de polos atual: {{ $motores->numero_de_polos }}</h5>
                          <input type="checkbox" name="numero_de_polos" value="2"> 2<br>
                          <input type="checkbox" name="numero_de_polos" value="4"> 4<br>
                          <input type="checkbox" name="numero_de_polos" value="6"> 6<br>
                          <input type="checkbox" name="numero_de_polos" value="8"> 8<br>
                          {{ ($errors->has('numero_de_polos')) ? $errors->first('numero_de_polos') : '' }}<br>
                          
                          <div>
                          <h5>Tensão de rede atual: {{ $motores->tensao_de_rede_v }}V</h5>
                          <input type="checkbox" name="tensao_de_rede_v" value="220"> 220V<br>
                          <input type="checkbox" name="tensao_de_rede_v" value="380"> 380V<br>
                          <input type="checkbox" name="tensao_de_rede_v" value="440"> 440V<br>
                          {{ ($errors->has('tensao_de_rede_v')) ? $errors->first('tensao_de_rede_v') : '' }}<br>
                          </div>

                          <h5>Regime de serviço atual: {{ $motores->regime_de_servico }}</h5>
                          <input type="checkbox" name="regime_de_servico" value="S1"> S1<br>
                          <input type="checkbox" name="regime_de_servico" value="S2"> S2<br>
                          <input type="checkbox" name="regime_de_servico" value="S3"> S3<br>
                          <input type="checkbox" name="regime_de_servico" value="S4"> S4<br>
                          <input type="checkbox" name="regime_de_servico" value="S5"> S5<br>
                          {{ ($errors->has('regime_de_servico')) ? $errors->first('regime_de_servico') : '' }}<br> 

                          <h5>Corrente nominal atual: {{ $motores->corrente_nominal_a }}A</h5>
                          <input type="num" name="corrente_nominal_a" value=""><br>
                          {{ ($errors->has('corrente_nominal_a')) ? $errors->first('corrente_nominal_a') : '' }}<br>
                          
                          <h5>Potência nominal atual: {{ $motores->potencia_nominal_w }}W</h5>
                          <input type="num" name="potencia_nominal_w" value=""><br>
                          {{ ($errors->has('potencia_nominal_w')) ? $errors->first('potencia_nominal_w') : '' }}<br>
                          
                          <h5>Torque máximo atual: {{ $motores->torque_maximo_nm }}Nm</h5>
                          <input type="num" name="torque_maximo_nm" value=""><br>
                          {{ ($errors->has('torque_maximo_nm')) ? $errors->first('torque_maximo_nm') : '' }}<br>  

                          <div align="center">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-info" name="name" value="Editar"><br><br>
                            <a class="btn btn-warning" href="/motores">Voltar</a>
                          </div>
                      </form>

                     
                          
      </div>
    </div>
  </div>
</div>
@endsection