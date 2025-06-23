<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
    protected $fillable = [
        'descricao',
        'avaliacao',
        'situacao'
    ];

    public function cidades() 
    {
        return $this->belongsToMany(Cidades::class, 'cidade_caracteristicas', 'cidade_id', 'caracteristica_id');
    }
}
