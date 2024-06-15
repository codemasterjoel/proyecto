<?php

namespace App\Models;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\RegistroLuchador as lsb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NBC extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    use HasFactory;

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
    public function jefe()
    {
        return $this->belongsTo(lsb::class);
    }
    public function organizador()
    {
        return $this->belongsTo(lsb::class);
    }
    public function formador()
    {
        return $this->belongsTo(lsb::class);
    }
    public function movilizador()
    {
        return $this->belongsTo(lsb::class);
    }
    public function defensa()
    {
        return $this->belongsTo(lsb::class);
    }
    public function productivo()
    {
        return $this->belongsTo(lsb::class);
    }
}
