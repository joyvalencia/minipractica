<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Concert extends Model
{
    protected $table = 'concerts';
    protected $fillable = [
        'nom',
        'data_hora',
        'durada_minuts',
        'tipus',
        'artist_id',
    ];

    protected $casts = [
        'data_hora' => 'datetime',
    ];

    //PONES EL NOMBRE DEL OTRO MODELO
    public function artista(): BelongsTo
    {
        return $this->belongsTo(Artista::class, 'artista_id');
    }
}
