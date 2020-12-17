<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showClientes(){
        $clientes = DB::table('cliente')->orderby('nombres', 'asc')->get();
        return view('clientes.clientes', ['clientes' => $clientes]);
    }
}
