<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    use HasFactory;
    protected $table = "posicions";

    protected $fillable = [
        'idCliente', 'posicion','otros','imagen'
    ];

    // Relación Posicion - Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
