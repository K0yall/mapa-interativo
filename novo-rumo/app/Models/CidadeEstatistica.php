<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CidadeEstatistica extends Model
{
    protected $table = 'cidades';

 public function populacao()
{
    return $this->hasMany(Populacao::class, 'cidade_id');
}


    public function trabalho()
    {
        return $this->hasOne(TrabalhoRendimento::class, 'cidade', 'nome');
    }

    public function educacao()
    {
        return $this->hasOne(Educacao::class, 'cidade', 'nome');
    }

    public function economia()
    {
        return $this->hasOne(Economia::class, 'cidade', 'nome');
    }

    public function saude()
    {
        return $this->hasOne(Saude::class, 'cidade', 'nome');
    }
}
