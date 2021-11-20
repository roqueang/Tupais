<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class servicio
 * @package App\Models
 * @version November 14, 2021, 6:53 pm UTC
 *
 * @property string $nombreservicio
 * @property string $tipo
 * @property string $cantidad
 * @property string $disponible
 */
class servicio extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbservicios";
    protected $primaryKey = "idservicio";

    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombreservicio',
        'tipo',
        'cantidad',
        'disponible'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombreservicio' => 'string',
        'tipo' => 'string',
        'cantidad' => 'string',
        'disponible' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreservicio' => 'required',
        'tipo' => 'required',
        'cantidad' => 'required',
        'disponible' => 'required'
    ];

    
}
