<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $persona_id
 * @property $libro_id
 * @property $fecha_prestamo
 * @property $fecha_devolucion
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @property Persona $persona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'persona_id' => 'required',
		'libro_id' => 'required',
		'fecha_prestamo' => 'required',
		'fecha_devolucion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','libro_id','fecha_prestamo','fecha_devolucion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    

}
