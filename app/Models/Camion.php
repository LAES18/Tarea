<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    protected $table = 'camiones';

    protected $fillable = [
        'placa',
        'codigo_interno',
        'id_transporte',
        'color',
        'modelo',
        'capacidad_toneladas',
        'id_marca',
    ];

    // Relación con Transporte
    public function transporte()
    {
        return $this->belongsTo(Transporte::class, 'id_transporte');
    }

    // Relación con Marca
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
