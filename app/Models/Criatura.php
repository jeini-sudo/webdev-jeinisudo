<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Criatura extends Model
{
    use HasFactory;

    protected $table = 'criaturas';
    protected $fillable = [
        'nombre',
        'comida',
        'limpieza',
        'agua',
        'vivo',
        'etapa',
        'forma',
        'fallos_etapa',
        'interaccion'
    ];
}
