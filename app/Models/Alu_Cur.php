<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Alu_Cur
 * @package App\Models
 * @version December 2, 2021, 7:46 am UTC
 *
 * @property string $codalu
 * @property string $codcur
 * @property string $nota
 */
class Alu_Cur extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'alu__curs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'codalu',
        'codcur',
        'nota'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codalu' => 'string',
        'codcur' => 'string',
        'nota' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codalu' => 'required',
        'codcur' => 'required',
        'nota' => 'required'
    ];

    
}
