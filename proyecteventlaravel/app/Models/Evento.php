<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
    'imagen',
    'titulo',
    'lugar_evento',
    'fecha_hora',
    'categoria',
    'descripcion',
    'tipo_pago',
    'restriccion_evento',
    'precio_adultos',
    'precio_ninios',
    'inventario'
    ];
}
