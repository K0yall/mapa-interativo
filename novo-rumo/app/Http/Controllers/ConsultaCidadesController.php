<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidades;

class ConsultaCidadesController extends Controller
{
    public function Consultar() {
        $cidades = Cidades::all();

        return view('home.consultaCidades', compact('cidades'));
    }
}
