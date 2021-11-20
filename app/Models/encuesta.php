<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class encuesta
 * @package App\Models
 * @version November 16, 2021, 1:31 am UTC
 *
 * @property integer $idcolaborador
 * @property integer $idservicio
 * @property integer $idmedico
 * @property string $fechadeatencion
 * @property string $calidaddeservicio
 * @property string $comentario
 */
class encuesta extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbencuesta";
    protected $primaryKey = "idencuesta";
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcolaborador',
        'idservicio',
        'idmedico',
        'fechadeatencion',
        'calidaddeservicio',
        'comentario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcolaborador' => 'integer',
        'idservicio' => 'integer',
        'idmedico' => 'integer',
        'fechadeatencion' => 'string',
        'calidaddeservicio' => 'string',
        'comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcolaborador' => 'required',
        'idservicio' => 'required',
        'idmedico' => 'required',
        'fechadeatencion' => 'required',
        'calidaddeservicio' => 'required',
        'comentario' => 'required'
    ];

    
}
