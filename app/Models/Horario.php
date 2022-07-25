<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $hora_i
 * @property $hora_f
 * @property $curso_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
		'hora_i' => 'required',
		'hora_f' => 'required',
		'curso_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hora_i','hora_f','curso_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    

}
