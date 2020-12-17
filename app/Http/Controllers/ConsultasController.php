<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function consultas(){
        //Consulta subpunto a)
        $ocupadas=DB::table('habitacion as hab')->join('factura as fact', 'hab.Numero', '=', 'fact.Numero')->join('precio', 'precio_id', '=', 'precio.id')->select('hab.Numero', 'Tipo','precio')->where('fact.Salida','=',NULL)->get();
        
        //Consulta subpunto d)
        $contador = DB::table('habitacion')->join('precio', 'precio_id', '=', 'precio.id')->select(DB::raw("count(Tipo) as habitacion_count, Tipo"))->groupBy('Tipo')->orderby('precio.id', 'asc')->get();
        
        return view('consultas', ['ocupadas' => $ocupadas], ['contador' => $contador]);
    }
}