<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class estudante extends Model
{
    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'contacto',
        'localizacao'
    ];
}
