<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class medico
 * @package App\Models
 * @version November 14, 2021, 5:50 pm UTC
 *
 * @property string $nombremedico
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 */
class medico extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbmedico";
    protected $primaryKey = "idmedico";

    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombremedico',
        'apellido',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombremedico' => 'string',
        'apellido' => 'string',
        'direccion' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombremedico' => 'required',
        'apellido' => 'required',
        'direccion' => 'required',
        'telefono' => 'required'
    ];

    
}
