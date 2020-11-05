<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class raza
 * @package App\Models
 * @version September 19, 2020, 11:16 am UTC
 *
 * @property integer $id
 * @property string $raza
 */
class raza extends Model
{
    use SoftDeletes;

    public $table = 'razas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'raza'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id' => 'integer',
        'raza' => 'string'
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
