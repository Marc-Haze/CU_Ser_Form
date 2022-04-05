<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $table = "prendas";

    protected $fillable = [
        'idPosicion', 'tipoPrenda'
    ];

    // Relación Prenda - Posicion
    public function posicion()
    {
        return $this->belongsTo(Posicion::class);
    }
}
