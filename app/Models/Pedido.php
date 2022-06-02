<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "pedidos";

    protected $fillable = [
        'id','idCliente','numeroTienda','fechaPedido','fechaTerminacion','creacion'
    ];

    // Relación Pedido - Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
