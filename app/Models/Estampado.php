<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estampado extends Model
{
    use HasFactory;
    protected $table = "estampados";

    protected $fillable = [
        'idTrabajo', 'referencia','unidades','precioUnd','importeTotal','observaciones'
    ];

    // Relación Estampado - T.Trabajo
    public function trabajo()
    {
        return $this->belongsTo(Trabajo::class);
    }
}
