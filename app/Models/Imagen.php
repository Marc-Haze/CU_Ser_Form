<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = "imagens";

    protected $fillable = [
        'idCliente', 'imagen'
    ];

    // Relación Imagen - Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
