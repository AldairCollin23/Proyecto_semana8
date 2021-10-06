<?php

namespace App\Repositories;

use App\Models\Detallecita;
use App\Repositories\BaseRepository;

/**
 * Class DetallecitaRepository
 * @package App\Repositories
 * @version October 5, 2021, 11:04 pm UTC
*/

class DetallecitaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cita'
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
        return Detallecita::class;
    }
}
