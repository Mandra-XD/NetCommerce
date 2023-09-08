<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsuariosMenosTareasController extends Controller
{
    public function index()
    {

        $usuarios = User::select('id','name')
        ->withCount('tareas')
        ->having('tareas_count', '<', 5)
        ->orderBy('tareas_count','desc')
        ->get();
        return view('usuario_menos_tarea',[
            'usuarios' => $usuarios
        ]);
    }
}
