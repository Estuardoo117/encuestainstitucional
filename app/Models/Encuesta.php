<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;/*se agrega*/;


class Encuesta extends Model
{
    //

use HasFactory;

protected $fillable = [
    'anio',
    'estado',

];

protected $casts = [
    'anio' => 'integer',
    'estado' => 'boolean',

];

public function respuestas(): HasMany
{
    return $this->hasMany(Respuesta::class);

   }
}
