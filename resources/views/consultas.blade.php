@extends('master')
    @section('content')
    <h1 align = "center">a) Obtener el número de habitación, tipo y precio de las habitaciones que estén ocupadas en la actualidad.</h1>
        </br>
        @foreach ($ocupadas as $habitacion)
                <li>
                    <h2 > Habitación Número {{ $habitacion->Numero}} </h2>
                    <h2 > Tipo: {{$habitacion->Tipo}} </h2>
                    <h2 > Precio: {{$habitacion->precio}} </h2>
                </li>
        </br>
        </br>
        @endforeach
        </br>
    <h1 align = "center">d) Obtener la cantidad de habitaciones por tipo que cuenta el hotel.</h1>
        </br>
        @foreach ($contador as $habitaciones)
                <li> 
                <h2 > Habitaciones Tipo {{ $habitaciones->Tipo}} </h2>
                <h2 > Cantidad: {{$habitaciones->habitacion_count}} </h2>
                </li>
        </br>
        </br>
        @endforeach
@stop