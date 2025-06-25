<?php

namespace App\Http\Controllers;

use App\Models\CidadeEstatistica;
use App\Models\Cidades;
use Illuminate\Http\Request;
use App\Models\Populacao;
use App\Models\Educacao;
use App\Models\TrabalhoRendimento;
use App\Models\Economia;
use App\Models\Saude;

class ConsultaCidadesController extends Controller
{
    public function Consultar()
    {
        $cidades = Cidades::all();
        return view('home.consultaCidades', compact('cidades'));
    }
public function mostrar($id)
{
    $cidade = Cidades::with([
        'caracteristicas',
        'imagens', // <- Aqui você puxa as imagens vinculadas
    ])->findOrFail($id);

    $populacao = Populacao::where('cidade_id', $cidade->id)->get();
    $trabalho = TrabalhoRendimento::where('cidade_id', $cidade->id)->get();
    $educacao = Educacao::where('cidade_id', $cidade->id)->get();
    $economia = Economia::where('cidade_id', $cidade->id)->get();
    $saude = Saude::where('cidade_id', $cidade->id)->get();

    return view('cidade', compact('cidade', 'populacao', 'trabalho', 'educacao', 'economia', 'saude'));
}
}
