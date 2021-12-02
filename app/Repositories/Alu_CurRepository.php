<?php

namespace App\Repositories;

use App\Models\Alu_Cur;
use App\Repositories\BaseRepository;

/**
 * Class Alu_CurRepository
 * @package App\Repositories
 * @version December 2, 2021, 7:46 am UTC
*/

class Alu_CurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codalu',
        'codcur',
        'nota'
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
        return Alu_Cur::class;
    }
}
