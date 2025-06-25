<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Populacao extends Model
{
    protected $table = 'populacaos';

    protected $fillable = [
        'cidade_id',
        'ano',
        'populacao',
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidades::class, 'cidade_id');
    }
}