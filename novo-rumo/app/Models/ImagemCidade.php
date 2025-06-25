<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagemCidade extends Model
{
    protected $fillable = ['cidade_id', 'caminho'];

    public function cidade()
{
    return $this->belongsTo(Cidades::class, 'cidade_id');
}

}
