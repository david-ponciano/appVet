<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class productos
 * @package App\Models
 * @version September 19, 2020, 11:52 am UTC
 *
 * @property integer $id
 * @property string $foto
 * @property string $nombre
 * @property string $descripcion
 * @property string $precioVenta
 * @property string $preciocompra
 * @property integer $stock
 */
class productos extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'foto',
        'nombre',
        'descripcion',
        'precioVenta',
        'preciocompra',
        'stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id' => 'integer',
        'foto' => 'string',
        'nombre' => 'string',
        'descripcion' => 'string',
        'precioVenta' => 'string',
        'preciocompra' => 'string',
        'stock' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'precioCompra string number'
    ];

    
}
