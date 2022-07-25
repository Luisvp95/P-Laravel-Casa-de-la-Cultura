<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $carnet
 * @property $email
 * @property $direccion
 * @property $celular
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'carnet' => 'required',
		'email' => 'required',
		'direccion' => 'required',
		'celular' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','carnet','email','direccion','celular','tipo'];



}
