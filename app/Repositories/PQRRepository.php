<?php

namespace App\Repositories;

use App\Models\PQR;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PQRRepository
 * @package App\Repositories
 * @version November 13, 2018, 11:49 am UTC
 *
 * @method PQR findWithoutFail($id, $columns = ['*'])
 * @method PQR find($id, $columns = ['*'])
 * @method PQR first($columns = ['*'])
*/
class PQRRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'cedula',
        'correo',
        'direccion',
        'telefono',
        'motivo_solicitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PQR::class;
    }
}
