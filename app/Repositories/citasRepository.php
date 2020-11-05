<?php

namespace App\Repositories;

use App\Models\citas;
use App\Repositories\BaseRepository;

/**
 * Class citasRepository
 * @package App\Repositories
 * @version September 19, 2020, 11:45 am UTC
*/

class citasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idCita',
        'idUsuario',
        'idMascota',
        'idServicio',
        'fecha'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return citas::class;
    }
}
