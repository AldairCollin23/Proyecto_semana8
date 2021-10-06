<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detallecita
 * @package App\Models
 * @version October 5, 2021, 11:04 pm UTC
 *
 * @property string $cita
 */
class Detallecita extends Model
{
    //use SoftDeletes;

    public $table = 'detallecita';
    protected $primaryKey= 'iddetallecita'; 
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddetallecita' => 'integer',
        'cita' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cita' => 'nullable|string|max:45'
    ];

    
}
