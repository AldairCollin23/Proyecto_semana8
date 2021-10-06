<?php

namespace App\Repositories;

use App\Models\Cita;
use App\Repositories\BaseRepository;

/**
 * Class CitaRepository
 * @package App\Repositories
 * @version October 5, 2021, 10:55 pm UTC
*/

class CitaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paciente',
        'fecha',
        'doctor'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cita::class;
    }
}
