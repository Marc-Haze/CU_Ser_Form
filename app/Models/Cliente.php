<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";

    protected $fillable = [
        'id'.'cif_nif','razonSocial','nombreComercial','telefono','email','domicilio','codigoPostal','municipio','provincia','observaciones'
    ];
}
