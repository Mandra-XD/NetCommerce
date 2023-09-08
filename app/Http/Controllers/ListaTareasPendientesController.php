<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
class ListaTareasPendientesController extends Controller
{
    public function index()
    {
        $tarea = Tarea::select('id','nombre','estatus','empresa_id','user_id')
        ->groupBy('empresa_id','id','estatus','nombre','user_id')
        ->orderBy('empresa_id')
        ->where('estatus',0)
        ->get();
        return view('lista_tareas_pendiente',[
            'tareas' =>  $tarea
        ]);
    }
}
