<?php

namespace App\Repositories;

use App\Models\colaborador;
use App\Repositories\BaseRepository;

/**
 * Class colaboradorRepository
 * @package App\Repositories
 * @version November 14, 2021, 8:13 pm UTC
*/

class colaboradorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombrecolaborador',
        'apellido',
        'direccion',
        'telefono'
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
        return colaborador::class;
    }
}
