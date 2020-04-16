<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    protected $fillable = [
        'nome_completo',
<<<<<<< HEAD
        'data_de_nascimento',
=======
        'data_nascimento',
>>>>>>> 55f4bf6b32ede8ff5a1e56b5ed26f88a8972999a
        'contacto',
        'localizacao'
    ];
}
