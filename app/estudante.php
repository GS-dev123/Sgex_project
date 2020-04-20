<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class estudante extends Model
{
    protected $fillable = [
        'nome_completo',
        'data_de_nascimento',
        'contacto',
        'curso_id',
        'localizacao'
    ];



    public function curso(){
        return $this->belongsTo('App\curso', 'curso_id', 'id');
    }

}
