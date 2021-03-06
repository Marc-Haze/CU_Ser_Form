<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use HasFactory;
    protected $table = "trabajos";

    protected $fillable = [
        "idPedido","tipoTrabajo","referencia"
    ];

    // Relación Prenda - Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
