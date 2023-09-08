<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
class EmpresaTareaPendientesController extends Controller
{
    public function index()
    {
        $empresas = Empresa::select('id','empresa')
        ->whereRelation('tareas','estatus',0)
        ->withCount(['tareas' => function($query)
        { $query->where('estatus',0);
        },])
        ->orderBy('tareas_count','desc')
        ->get();
        return view('empresa_mas_tareas',[
            'empresas' => $empresas,
        ]);
    }
}
