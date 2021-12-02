<?php

namespace App\Repositories;

use App\Models\Alumnos;
use App\Repositories\BaseRepository;

/**
 * Class AlumnosRepository
 * @package App\Repositories
 * @version December 2, 2021, 7:35 am UTC
*/

class AlumnosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codalu',
        'nombres',
        'apellidos'
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
        return Alumnos::class;
    }
}
