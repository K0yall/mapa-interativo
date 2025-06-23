<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $fillable = [
        'nome',
        'populacao',
        'custo_vida',
        'atrativos',
        'descricao',
        'identificador_alias'
    ];

    public function caracteristicas() 
    {
        return $this->belongsToMany(Caracteristicas::class, 'cidade_caracteristicas', 'cidade_id', 'caracteristica_id');
    }
}
