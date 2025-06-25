<?php

namespace App\Http\Controllers;

use App\Models\Caracteristicas;
use Illuminate\Http\Request;
use App\Models\Cidades;
use Illuminate\Support\Facades\DB;

class ConsultaCidadesController extends Controller
{
    public function Consultar() {
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
}
