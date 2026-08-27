<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criatura; //

class CriaturaController extends Controller
{

public function obtenerEstado(){
$criatura = Criatura::first();
if(!$criatura){
    $criatura = Criatura::create([
     
        'nombre' => 'Mounstruo',
        'comida' => 100,
        'limpieza' => 100,
        'agua' => 100,
        'vivo' => true,
        'etapa' => 1,
        'forma' => 'huevo',
        'fallos_etapa' => 0,
        'interaccion' => now()
        ]);
         }
        return response()->json($criatura);
        
        }
        }
