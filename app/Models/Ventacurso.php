<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventacurso
 *
 * @property $id
 * @property $persona_id
 * @property $curso_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Persona $persona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ventacurso extends Model
{
    
    static $rules = [
		'persona_id' => 'required',
		'curso_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','curso_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    

}
