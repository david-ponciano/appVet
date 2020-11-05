<?php

namespace App\Repositories;

use App\Models\mascota;
use App\Repositories\BaseRepository;

/**
 * Class mascotaRepository
 * @package App\Repositories
 * @version September 19, 2020, 10:56 am UTC
*/

class mascotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre',
        'raza',
        'propietario',
        'foto',
        'fnacimiento'
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
        return mascota::class;
    }
}
