<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
  static $rules = [
  'nombre' => 'required',
  ];
  protected $perPage = 20;
  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  use HasFactory;
  protected $fillable = ['nombre'];
  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function libros()
  {
      return $this->hasMany('App\Models\Libro', 'categoria_id', 'id');
  }
  

}
