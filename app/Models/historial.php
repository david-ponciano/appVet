<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class historial
 * @package App\Models
 * @version September 19, 2020, 11:04 am UTC
 *
 * @property integer $id
 * @property string $fecha
 * @property string $servicio
 * @property string $descripcion
 */
class historial extends Model
{
    use SoftDeletes;

    public $table = 'historials';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'fecha',
        'servicio',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id' => 'integer',
        'fecha' => 'string',
        'servicio' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required'
    ];

    
}
