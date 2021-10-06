<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita
 * @package App\Models
 * @version October 5, 2021, 10:55 pm UTC
 *
 * @property string $paciente
 * @property string $fecha
 * @property string $doctor
 */
class Cita extends Model
{
    //use SoftDeletes;

    public $table = 'cita';
    protected $primaryKey= 'idcita'; 
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'paciente',
        'fecha',
        'doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita' => 'integer',
        'paciente' => 'string',
        'fecha' => 'string',
        'doctor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'paciente' => 'nullable|string|max:45',
        'fecha' => 'nullable|string|max:45',
        'doctor' => 'nullable|string|max:45'
    ];

    
}
