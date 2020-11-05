<?php

namespace App\Repositories;

use App\Models\productos;
use App\Repositories\BaseRepository;

/**
 * Class productosRepository
 * @package App\Repositories
 * @version September 19, 2020, 11:52 am UTC
*/

class productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'foto',
        'nombre',
        'descripcion',
        'precioVenta',
        'preciocompra',
        'stock'
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
        return productos::class;
    }
}
