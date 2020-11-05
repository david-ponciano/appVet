<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class citas
 * @package App\Models
 * @version September 19, 2020, 11:45 am UTC
 *
 * @property integer $idCita
 * @property integer $idUsuario
 * @property integer $idMascota
 * @property integer $idServicio
 * @property string $fecha
 */
class citas extends Model
{
    use SoftDeletes;

    public $table = 'citas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'idCita',
        'idUsuario',
        'idMascota',
        'idServicio',
        'fecha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idCita' => 'integer',
        'idUsuario' => 'integer',
        'idMascota' => 'integer',
        'idServicio' => 'integer',
        'fecha' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idMascota' => 'idServicio integer number'
    ];

    
}
