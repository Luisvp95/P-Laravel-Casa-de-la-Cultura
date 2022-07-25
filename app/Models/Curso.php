<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $nombre
 * @property $fecha_i
 * @property $fecha_f
 * @property $costo
 * @property $created_at
 * @property $updated_at
 *
 * @property Contenido $contenido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fecha_i' => 'required',
		'fecha_f' => 'required',
		'costo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fecha_i','fecha_f','costo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contenido()
    {
        return $this->hasOne('App\Models\Contenido', 'id', 'id');
    }
    

}
