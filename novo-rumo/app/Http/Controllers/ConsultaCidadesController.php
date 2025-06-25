<?php

namespace App\Http\Controllers;

use App\Models\CidadeEstatistica;
use App\Models\Cidades;
use Illuminate\Support\Facades\DB;
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

        // Para cada cidade, buscar as top 5 características
        $caracteristicasPorCidade = [];

        foreach ($cidades as $cidade) {
            $top5 = DB::table('cidade_caracteristicas')
                ->join('caracteristicas', 'cidade_caracteristicas.caracteristica_id', '=', 'caracteristicas.id')
                ->select(
                    'caracteristicas.id',
                    'caracteristicas.descricao',
                    'caracteristicas.avaliacao',
                    'cidade_caracteristicas.quantidade_total')
                ->where('cidade_caracteristicas.cidade_id', $cidade->id)
                ->orderByDesc('cidade_caracteristicas.quantidade_total')
                ->limit(5)
                ->get();

            $caracteristicasPorCidade[$cidade->id] = $top5;
        }

        return view('cidade.consultaCidades', [
            'cidades' => $cidades,
            'caracteristicasPorCidade' => $caracteristicasPorCidade,
        ]);
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
