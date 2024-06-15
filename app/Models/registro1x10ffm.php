<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro1x10ffm extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'NombreCompleto',
        'fecha_nac',
        'telefono',
        'genero_id',
        'estado_id',
        'municipio_id',
        'parroquia_id',
        'centro_id'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
}
