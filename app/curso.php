<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $fillable = [
        'nome',
        'duracao',
        'numero_de_disciplinas',
        'preco'
    ];
}
