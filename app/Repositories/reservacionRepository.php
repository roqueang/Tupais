<?php

namespace App\Repositories;

use App\Models\reservacion;
use App\Repositories\BaseRepository;

/**
 * Class reservacionRepository
 * @package App\Repositories
 * @version November 14, 2021, 11:03 pm UTC
*/

class reservacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcolaborador',
        'idmedico',
        'idservicio',
        'fechadereservacion',
        'hora'
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
        return reservacion::class;
    }
}
