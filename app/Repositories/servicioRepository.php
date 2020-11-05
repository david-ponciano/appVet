<?php

namespace App\Repositories;

use App\Models\servicio;
use App\Repositories\BaseRepository;

/**
 * Class servicioRepository
 * @package App\Repositories
 * @version September 19, 2020, 11:20 am UTC
*/

class servicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'tipoServicio'
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
        return servicio::class;
    }
}
