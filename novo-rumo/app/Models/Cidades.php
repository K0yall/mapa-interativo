<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

   protected $table = 'cidades';

    public function populacoes(): HasMany
    {
        return $this->hasMany(Populacao::class, 'cidade_id');
    }

    public function trabalhoRendimentos(): HasMany
    {
        return $this->hasMany(TrabalhoRendimento::class, 'cidade_id');
    }

    public function educacoes(): HasMany
    {
        return $this->hasMany(Educacao::class, 'cidade_id');
    }

    public function economias(): HasMany
    {
        return $this->hasMany(Economia::class, 'cidade_id');
    }

    public function saudes(): HasMany
    {
        return $this->hasMany(Saude::class, 'cidade_id');
    }
    public function imagens()
{
    return $this->hasMany(ImagemCidade::class, 'cidade_id');
}

}

