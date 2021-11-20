<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class receta
 * @package App\Models
 * @version November 15, 2021, 5:10 am UTC
 *
 * @property integer $idmedico
 * @property integer $idcolaborador
 * @property integer $idmedicamento
 * @property integer $idservicio
 * @property string $fechadeemision
 */
class receta extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbreceta";
    protected $primaryKey = "idreceta";
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'idmedico',
        'idcolaborador',
        'idmedicamento',
        'idservicio',
        'fechadeemision'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idmedico' => 'integer',
        'idcolaborador' => 'integer',
        'idmedicamento' => 'integer',
        'idservicio' => 'integer',
        'fechadeemision' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idmedico' => 'required',
        'idcolaborador' => 'required',
        'idmedicamento' => 'required',
        'idservicio' => 'required',
        'fechadeemision' => 'required'
    ];

    
}
