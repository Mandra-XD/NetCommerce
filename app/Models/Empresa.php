<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;



    protected $fillable = [
        'empresa',
        'email',
        'direccion',
    ];

    public function tareas()
    {
        return $this->hasMany(Tarea::class,'empresa_id');
    }
}
