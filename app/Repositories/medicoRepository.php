<?php

namespace App\Repositories;

use App\Models\medico;
use App\Repositories\BaseRepository;

/**
 * Class medicoRepository
 * @package App\Repositories
 * @version November 14, 2021, 5:50 pm UTC
*/

class medicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombremedico',
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
        return medico::class;
    }
}
