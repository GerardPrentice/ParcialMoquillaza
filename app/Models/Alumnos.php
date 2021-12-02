<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Alumnos
 * @package App\Models
 * @version December 2, 2021, 7:35 am UTC
 *
 * @property string $codalu
 * @property string $nombres
 * @property string $apellidos
 */
class Alumnos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'alumnos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'codalu',
        'nombres',
        'apellidos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codalu' => 'string',
        'nombres' => 'string',
        'apellidos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codalu' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required'
    ];

    
}
