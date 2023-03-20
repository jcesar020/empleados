<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    use HasFactory;

    /**
     * Obtener el estado de la educacion.
     */
    public function estado()
    {
        return $this->belongsTo(EstadoEducacion::class, 'id', 'IdEstadoEducacion');
    }

    /**
     * Obtener el carrera de la educacion.
     */
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id', 'IdCarrera');
    }


 
}
