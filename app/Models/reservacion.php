<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class reservacion
 * @package App\Models
 * @version November 14, 2021, 11:03 pm UTC
 *
 * @property integer $idcolaborador
 * @property integer $idmedico
 * @property integer $idservicio
 * @property string $fechadereservacion
 * @property string $hora
 */
class reservacion extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbreservacion";
    protected $primaryKey = "idreservacion";
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcolaborador',
        'idmedico',
        'idservicio',
        'fechadereservacion',
        'hora'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcolaborador' => 'integer',
        'idmedico' => 'integer',
        'idservicio' => 'integer',
        'fechadereservacion' => 'string',
        'hora' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcolaborador' => 'required',
        'idmedico' => 'required',
        'idservicio' => 'required',
        'fechadereservacion' => 'required',
        'hora' => 'required'
    ];

    
}
