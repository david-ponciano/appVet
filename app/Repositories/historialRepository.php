<?php

namespace App\Repositories;

use App\Models\historial;
use App\Repositories\BaseRepository;

/**
 * Class historialRepository
 * @package App\Repositories
 * @version September 19, 2020, 11:04 am UTC
*/

class historialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'fecha',
        'servicio',
        'descripcion'
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
        return historial::class;
    }
}
