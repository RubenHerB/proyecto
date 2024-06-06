<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUsuario',
        'cantidad_personas',
        'horario',
        'dia_visita',
    ];
    protected $hidden = [
        'status',
    ];
    public function user(){
    return $this->belongsTo('App\Models\User');
    }
}
