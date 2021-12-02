<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cursos
 * @package App\Models
 * @version December 2, 2021, 7:41 am UTC
 *
 * @property string $codcur
 * @property string $creditos
 */
class Cursos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cursos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'codcur',
        'creditos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codcur' => 'string',
        'creditos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codcur' => 'nomcur string text'
    ];

    
}
