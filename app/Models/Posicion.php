<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    use HasFactory;
    protected $table = "posicions";

    protected $fillable = [
        'idImagen', 'posicion','otros','imagen'
    ];

    // Relación Posicion - Imagen
    public function imagen()
    {
        return $this->belongsTo(Imagen::class);
    }
}
