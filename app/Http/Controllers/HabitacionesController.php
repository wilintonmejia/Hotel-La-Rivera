<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones(){
        $habitaciones = DB::table('habitacion')->join('precio', 'precio_id', '=', 'precio.id')->orderby('Numero', 'asc')->get();
        return view('servicios.habitaciones', ['habitaciones' => $habitaciones]);
    }
}
