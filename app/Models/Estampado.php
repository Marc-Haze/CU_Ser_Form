<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estampado extends Model
{
    use HasFactory;
    protected $table = "estampados";

    protected $fillable = [
        'idPedido','referencia','unidades','precioUnd','importeTotal','observaciones'
    ];

    // Relación Estampado - Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
