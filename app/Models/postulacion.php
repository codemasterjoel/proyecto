<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postulacion extends Model
{
    use HasFactory;


    protected $fillable = [
        'estatus',
        'cedula',
        'NombreCompleto',
        'fecha_nac',
        'telefono',
        'correo',
        'genero_id',
        'nivel_academico_id',
        'estado_id',
        'municipio_id',
        'parroquia_id',
        'direccion'
    ];
}
