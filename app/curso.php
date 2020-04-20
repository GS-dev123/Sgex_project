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



    public function estudantes()
    {
        return $this->hasMany('App\estudante', 'curso_id', 'id');
    }
}
