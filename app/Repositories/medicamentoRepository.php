<?php

namespace App\Repositories;

use App\Models\medicamento;
use App\Repositories\BaseRepository;

/**
 * Class medicamentoRepository
 * @package App\Repositories
 * @version November 15, 2021, 12:27 am UTC
*/

class medicamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombremedicamento',
        'presentacion',
        'fechadecreacion',
        'fechadecaducidad',
        'lote',
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
        return medicamento::class;
    }
}
