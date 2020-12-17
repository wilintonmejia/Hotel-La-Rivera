@extends('master')
    @section('content')
    <h1 align = "center"> HABITACIONES </h1>
    <div class="container"> 
        <div class="row">
        @foreach ($habitaciones as $habitacion)
            <div class="card" style="width: 100rem;">
                <img src='{{url("assets/images/Habitaciones/$habitacion->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" align="center"> Habitación Número {{ $habitacion->Numero}} </p>
                    <p class="card-text"> Descripción: {{$habitacion->descripcion}} </p>
                    <p class="card-text"> Número de Camas: {{$habitacion->numCamas}} </p>
                    <p class="card-text"> Tipo de Habitación: {{$habitacion->Tipo}} </p>
                    <p class="card-text"> Precio: {{$habitacion->precio}} </p>
                </div>
            </div>          
        <br>
        </br>
        @endforeach
        </div>
    </div>
@stop