<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $categoria_id
 * @property $nombre
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Prestamo[] $prestamos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
        'editorial' => 'required',
        'anyo' => 'required',
		'stock' => 'required',
        'categoria_id' => 'required',
        'autor_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','editorial','anyo','stock','categoria_id','autor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autor()
    {
        return $this->hasOne('App\Models\Autor', 'id', 'autor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prestamos()
    {
        return $this->hasMany('App\Models\Prestamo', 'libro_id', 'id');
    }
    

}
