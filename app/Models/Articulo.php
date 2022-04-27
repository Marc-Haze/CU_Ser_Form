<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = "articulos";

    protected $fillable = [
        'idPedido','articulo','color','talla','descripcion','codigoInterno','ean'
    ];

    // Relación Articulo - Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
