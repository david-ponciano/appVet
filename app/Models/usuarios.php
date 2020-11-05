<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class usuarios
 * @package App\Models
 * @version September 19, 2020, 10:43 am UTC
 *
 * @property integer $id
 * @property string $foto
 * @property string $nombre
 * @property integer $rol
 * @property string $email
 */
class usuarios extends Model
{
    use SoftDeletes;

    public $table = 'usuarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'foto',
        'nombre',
        'rol',
        'email'
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
        'rol' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'nombre' => 'required'
    ];

    
}
