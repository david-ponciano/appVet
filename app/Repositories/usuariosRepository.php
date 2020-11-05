<?php

namespace App\Repositories;

use App\Models\usuarios;
use App\Repositories\BaseRepository;

/**
 * Class usuariosRepository
 * @package App\Repositories
 * @version September 19, 2020, 10:43 am UTC
*/

class usuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'foto',
        'nombre',
        'rol',
        'email'
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
        return usuarios::class;
    }
}
