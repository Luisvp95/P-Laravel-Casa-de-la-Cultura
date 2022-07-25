<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contenido
 *
 * @property $id
 * @property $nombre
 * @property $curso_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contenido extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'curso_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','curso_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    

}
