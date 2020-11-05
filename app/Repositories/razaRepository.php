<?php

namespace App\Repositories;

use App\Models\raza;
use App\Repositories\BaseRepository;

/**
 * Class razaRepository
 * @package App\Repositories
 * @version September 19, 2020, 11:16 am UTC
*/

class razaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'raza'
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
        return raza::class;
    }
}
