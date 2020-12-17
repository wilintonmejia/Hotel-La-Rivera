@extends('master')
    @section('content')
    <h1 align = "center"> CLIENTES </h1>
    <div class="table-responsive-xl">
    <table class="table table-hover table-striped table-dark">
        <thead>
            <tr>
                <!--<th scope="col">#</th>-->
                <th scope="col">Nombres</th>
                <th scope="col">Identificación</th>
                <th scope="col">Género</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <!--<td>{{$cliente->id}}</td>-->
                    <td>{{$cliente->nombres}}</td>
                    <td>{{$cliente->DNI}}</td>
                    <td>{{$cliente->genero}}</td>
                    <td>{{$cliente->Domicilio}}</td>
                    <td>{{$cliente->Telefono}}</td>
                    <td><img src='{{url("assets/images/Clientes/$cliente->foto")}}' width="150" height="150"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@stop