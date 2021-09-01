<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'id_evento',
        'fecha_hora',
        'nombre',
        'correo',
        'espacio_ninio',
        'espacio_adulto',
        'total',
        'tickets_idevent'
        ];
}
