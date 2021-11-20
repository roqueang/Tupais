<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class colaborador
 * @package App\Models
 * @version November 14, 2021, 8:13 pm UTC
 *
 * @property string $nombrecolaborador
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 */
class colaborador extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbcolaborador";
    protected $primaryKey = "idcolaborador";
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombrecolaborador',
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
        'nombrecolaborador' => 'string',
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
        'nombrecolaborador' => 'required',
        'apellido' => 'required',
        'direccion' => 'required',
        'telefono' => 'required'
    ];

    
}
