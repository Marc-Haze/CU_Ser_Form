<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "pedidos";

    protected $fillable = [
        'idCliente', 'idArticulo','idEstampado','numeroPedido'
    ];

    // Relación Pedido - Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    // Relación Pedido - Articulo
    public function articulo()
    {
        return $this->belongsTo(Articulo::class);
    }
    // Relación Pedido - Estampado
    public function estampado()
    {
        return $this->belongsTo(Estampado::class);
    }
}
