<?php

namespace App\Repositories;

use App\Models\encuesta;
use App\Repositories\BaseRepository;

/**
 * Class encuestaRepository
 * @package App\Repositories
 * @version November 16, 2021, 1:31 am UTC
*/

class encuestaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcolaborador',
        'idservicio',
        'idmedico',
        'fechadeatencion',
        'calidaddeservicio',
        'comentario'
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
        return encuesta::class;
    }
}
