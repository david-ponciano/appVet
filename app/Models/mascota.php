<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mascota
 * @package App\Models
 * @version September 19, 2020, 10:56 am UTC
 *
 * @property integer $id
 * @property string $nombre
 * @property string $raza
 * @property string $propietario
 * @property string $foto
 * @property string $fnacimiento
 */
class mascota extends Model
{
    use SoftDeletes;

    public $table = 'mascotas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'nombre',
        'raza',
        'propietario',
        'foto',
        'fnacimiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id' => 'integer',
        'nombre' => 'string',
        'raza' => 'string',
        'propietario' => 'string',
        'foto' => 'string',
        'fnacimiento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'nombre' => 'required',
        'propietario' => 'required'
    ];

    
}
