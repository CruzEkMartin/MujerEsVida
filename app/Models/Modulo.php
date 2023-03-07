<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $table = 'c_modulos';

    protected $fillable = [
        'idMunicipio',
        'municipio',
        'nombre',
        'domicilio',
        'telefono_publico',
        'geolocalizacion',
        'responsable',
        'telefono_responsable',
        'longitud',
        'latitud',
        'status',
    ];

}
