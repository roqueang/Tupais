<?php

namespace App\Repositories;

use App\Models\receta;
use App\Repositories\BaseRepository;

/**
 * Class recetaRepository
 * @package App\Repositories
 * @version November 15, 2021, 5:10 am UTC
*/

class recetaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idmedico',
        'idcolaborador',
        'idmedicamento',
        'idservicio',
        'fechadeemision'
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
        return receta::class;
    }
}
