<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version October 5, 2021, 11:02 pm UTC
 *
 * @property string $apellido
 * @property string $nombre
 * @property string $dni
 * @property string $celular
 */
class Paciente extends Model
{
    //use SoftDeletes;

    public $table = 'paciente';
    protected $primaryKey= 'idpaciente'; 
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido',
        'nombre',
        'dni',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpaciente' => 'integer',
        'apellido' => 'string',
        'nombre' => 'string',
        'dni' => 'string',
        'celular' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellido' => 'nullable|string|max:45',
        'nombre' => 'nullable|string|max:45',
        'dni' => 'nullable|string|max:45',
        'celular' => 'nullable|string|max:45'
    ];

    
}
