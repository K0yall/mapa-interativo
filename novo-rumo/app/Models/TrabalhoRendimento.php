<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrabalhoRendimento extends Model
{
    protected $table = 'trabalho_rendimentos';

    protected $fillable = [
        'cidade_id',
        'ano',
        'rendimento_medio',
        'taxa_ocupacao',
        'desocupados',
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidades::class, 'cidade_id');
    }
}
