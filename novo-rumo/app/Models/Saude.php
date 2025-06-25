<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Saude extends Model
{
    protected $table = 'saudes';

    protected $fillable = [
        'cidade_id',
        'ano',
        'estabelecimentos_sus',
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidades::class, 'cidade_id');
    }
}
