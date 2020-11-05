<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class servicio
 * @package App\Models
 * @version September 19, 2020, 11:20 am UTC
 *
 * @property integer $id
 * @property string $tipoServicio
 */
class servicio extends Model
{
    use SoftDeletes;

    public $table = 'servicios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'tipoServicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id' => 'integer',
        'tipoServicio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'tipoServicio' => 'required'
    ];

    
}
