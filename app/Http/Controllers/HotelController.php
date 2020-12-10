<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getIndex(){
        return view('principal');
    }
    public function showHistoria(){
        return view('hotel.historia');
    }
    public function showMision(){
        return view('hotel.vision');
    }
    public function showUbicacion(){
        return view('hotel.ubicación');
    }
    public function showContactos(){
        return view('contacto');
    }
}
