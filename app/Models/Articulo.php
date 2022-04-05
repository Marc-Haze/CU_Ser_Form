<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = "articulos";

    protected $fillable = [
        'idPrenda', 'referencia','color','talla','cantidad','colorEstampado'
    ];

    // Relación Articulo - Prenda
    public function prenda()
    {
        return $this->belongsTo(Prenda::class);
    }
}
