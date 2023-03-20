<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Empleado extends Model
{
    protected $guarded=[];
    use HasFactory;

    protected $dateFormat = 'd-m-Y';

    /**
     * obtiene la educacion del empleado.
     */
    public function educacion()
    {
        return $this->hasMany(Empleado::class);
    }


}
