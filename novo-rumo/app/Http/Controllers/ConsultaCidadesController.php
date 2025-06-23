<?php

namespace App\Http\Controllers;

use App\Models\Caracteristicas;
use Illuminate\Http\Request;
use App\Models\Cidades;

class ConsultaCidadesController extends Controller
{
    public function Consultar() {
        $cidades = Cidades::all();
        $caracteristicas = Caracteristicas::all();

        return view('home.consultaCidades', compact('cidades', 'caracteristicas'));
    }
}
