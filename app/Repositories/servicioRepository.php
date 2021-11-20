<?php

namespace App\Repositories;

use App\Models\servicio;
use App\Repositories\BaseRepository;

/**
 * Class servicioRepository
 * @package App\Repositories
 * @version November 14, 2021, 6:53 pm UTC
*/

class servicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreservicio',
        'tipo',
        'cantidad',
        'disponible'
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
        return servicio::class;
    }
}
