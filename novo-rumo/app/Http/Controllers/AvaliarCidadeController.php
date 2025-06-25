<?php

namespace App\Http\Controllers;

use App\Models\Caracteristicas;
use App\Models\Cidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvaliarCidadeController extends Controller
{
    public function index(string $idCidade) {
        $cidade = $idCidade;
        $caracteristicas = Caracteristicas::all();

        return view('cidade.avaliarCidade', compact('cidade','caracteristicas'));
    }
    
    public function registrarAvaliacao(Request $request, $idCidade) {
        $request->validate([
            'caracteristicas' => 'required|array',
            'caracteristicas.*' => 'integer|exists:caracteristicas,id'
        ]);

        $cidade = Cidades::findOrFail($idCidade);

        foreach($request->caracteristicas as $caracteristica) {
            $existe = DB::table('cidade_caracteristicas')
                ->where('cidade_id', $cidade->id)
                ->where('caracteristica_id', $caracteristica)
                ->first();
            
            if ($existe) {
                // Atualiza somando 1 na quantidade_total
                DB::table('cidade_caracteristicas')
                    ->where('cidade_id', $cidade->id)
                    ->where('caracteristica_id', $caracteristica)
                    ->increment('quantidade_total');
            } else {
                DB::table('cidade_caracteristicas')->insert([
                    'cidade_id' => $cidade->id,
                    'caracteristica_id' => $caracteristica,
                    'quantidade_total' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        return redirect()->route('cidades.listar')->with('success', 'Caracteristicas cadastradas com sucesso');

    }
}
