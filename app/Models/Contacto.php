<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUsuario',
        'mensaje',
        'email',
    ];
    protected $hidden = [
        'status',
    ];
    public function user(){
    return $this->belongsTo('App\Models\User');
}
}
