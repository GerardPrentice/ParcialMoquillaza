<?php

namespace App\Repositories;

use App\Models\Cursos;
use App\Repositories\BaseRepository;

/**
 * Class CursosRepository
 * @package App\Repositories
 * @version December 2, 2021, 7:41 am UTC
*/

class CursosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codcur',
        'creditos'
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
        return Cursos::class;
    }
}
