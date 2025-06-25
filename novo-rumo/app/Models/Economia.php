<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Economia extends Model
{
    protected $table = 'economias';

    protected $fillable = [
        'cidade_id',
        'ano',
        'pib',
        'pib_per_capita',
        'receitas_realizadas',
        'despesas_empenhadas',
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidades::class, 'cidade_id');
    }
}

