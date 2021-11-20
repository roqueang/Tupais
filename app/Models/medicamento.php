<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class medicamento
 * @package App\Models
 * @version November 15, 2021, 12:27 am UTC
 *
 * @property string $nombremedicamento
 * @property string $presentacion
 * @property string $fechadecreacion
 * @property string $fechadecaducidad
 * @property string $lote
 * @property string $disponible
 */
class medicamento extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'tbmedicamento';
    protected $primaryKey = 'idmedicamento';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombremedicamento',
        'presentacion',
        'fechadecreacion',
        'fechadecaducidad',
        'lote',
        'disponible'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombremedicamento' => 'string',
        'presentacion' => 'string',
        'fechadecreacion' => 'string',
        'fechadecaducidad' => 'string',
        'lote' => 'string',
        'disponible' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombremedicamento' => 'required',
        'presentacion' => 'required',
        'fechadecreacion' => 'required',
        'fechadecaducidad' => 'required',
        'lote' => 'required',
        'disponible' => 'required'
    ];

    
}
