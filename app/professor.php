<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'contacto',
        'localizacao'
    ];
}
