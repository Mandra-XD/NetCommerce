<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'estatus',
        'user_id',
        'empresa_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function empresas()
    {
        return $this->belongsTo(Empresa::class,'empresa_id');
    }
}
