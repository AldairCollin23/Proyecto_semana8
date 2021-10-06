<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version October 4, 2021, 11:12 pm UTC
 *
 * @property string $apellido
 * @property string $nombre
 * @property string $dni
 * @property string $especialidad
 * @property string $image_url
 */
class Doctor extends Model
{
    use SoftDeletes;

    public $table = 'doctors';
    public $timestamps =false;
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido',
        'nombre',
        'dni',
        'especialidad',
        'image_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'apellido' => 'string',
        'nombre' => 'string',
        'dni' => 'string',
        'especialidad' => 'string',
        'image_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
