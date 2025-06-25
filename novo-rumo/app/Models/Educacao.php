<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Educacao extends Model
{
    protected $table = 'educacaos';

    protected $fillable = [
        'cidade_id',
        'ano',
        'taxa_escolarizacao',
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidades::class, 'cidade_id');
    }
}