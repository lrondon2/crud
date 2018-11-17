<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PQR
 * @package App\Models
 * @version November 13, 2018, 11:49 am UTC
 *
 * @property string nombre
 * @property string cedula
 * @property string correo
 * @property string direccion
 * @property string telefono
 * @property string motivo_solicitud
 */
class PQR extends Model
{
    use SoftDeletes;

    public $table = 'pqrs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'cedula',
        'correo',
        'direccion',
        'telefono',
        'motivo_solicitud'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'cedula' => 'string',
        'correo' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'motivo_solicitud' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'cedula' => 'required',
        'correo' => 'required|email',
        'direccion' => 'required|min:3',
        'telefono' => 'required|min:6',
        'motivo_solicitud' => 'required'
    ];

    
}
