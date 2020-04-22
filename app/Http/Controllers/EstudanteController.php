<?php

namespace App\Http\Controllers;

use App\estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    
    public function index()
    {
        $estudante = Estudante::with('curso')->get();
        return view('estudante', compact('estudante'));
    }

    
    public function create()
    {
        return view('add_estudante');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nome_completo'=>'required|min:6|max:50',
            'localizacao'=>'required|min:3|max:50',
            'contacto'=>'required|min:9|numeric',
            'curso_id'=>'required'
        ],[
            'nome_completo.required'=>'Introduz o nome!!',
            'nome_completo.min'=>'NOME...A quantidade de caracteres nao deve ser menor que 6',
            'nome_completo.max'=>'NOME...A quantidade de caracteres nao deve ser maior que 50',
            'contacto.required'=>'Introduz o Contacto!!',
            'contacto.min'=>'CONTACTO...Contacto Invalido, os numero devem ser 9',
            'contacto.max'=>'CONTACTO...Contacto Invalido, os numero devem ser 10',
            'contacto.numeric'=>'Numero Invalido,O campo só permite números',
            'localizacao.required'=>'Introduz a Localização!!',
            'localizacao.min'=>'LOCALIZAÇÂO...Localização Invalido, número de cararcteres invalido',
            'localizacao.max'=>'LOCALIZAÇÂO...Localização Invalido, número de cararcteres invalido',
            'curso_id.required'=>'Seleccione o curso!!'
            
        ]);

        $estudante = new Estudante([
            'nome_completo' => $request->get('nome_completo'),
            'data_de_nascimento' => $request->get('data_de_nascimento'),
            'contacto' => $request->get('contacto'),
            'curso_id' => $request->get('curso_id'),
            'localizacao' => $request->get('localizacao')
           
        ]);
        $estudante->save();
        return redirect('/estudante')->with('sucess', 'Estudante registado com sucesso!');
    }

    public function show(Estudante $id)
    {
        $estudantes = Estudante::find($id);
        return view('/show_estudante', compact('estudantes'));
    }

    public function edit(Estudante $id)
    {
        $estudantes = Estudante::find($id);
        return view('/edit_estudante', compact('estudantes','id'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nome_completo'=>'required|min:6|max:50',
            'localizacao'=>'required|min:3|max:50',
            'contacto'=>'required|min:9|numeric',
            'curso_id'=>'required'
        ],[
            'nome_completo.required'=>'Introduz o nome!!',
            'nome_completo.min'=>'NOME...A quantidade de caracteres nao deve ser menor que 6',
            'nome_completo.max'=>'NOME...A quantidade de caracteres nao deve ser maior que 50',
            'contacto.required'=>'Introduz o Contacto!!',
            'contacto.min'=>'CONTACTO...Contacto Invalido, os numero devem ser 9',
            'contacto.max'=>'CONTACTO...Contacto Invalido, os numero devem ser 10',
            'contacto.numeric'=>'Numero Invalido,O campo só permite números',
            'localizacao.required'=>'Introduz a Localização!!',
            'localizacao.min'=>'LOCALIZAÇÂO...Localização Invalido, número de cararcteres invalido',
            'localizacao.max'=>'LOCALIZAÇÂO...Localização Invalido, número de cararcteres invalido',
            'curso_id.required'=>'Seleccione o curso!!'
            
        ]);
        $estudante = Estudante::find($id);
        $estudante->nome_completo =  $request->get('nome_completo');
        $estudante->data_de_nascimento = $request->get('data_de_nascimento');
        $estudante->contacto = $request->get('contacto');
        $estudante->curso->nome= $request->get('nome');
        $estudante->localizacao = $request->get('localizacao');
        $estudante->save();
        return redirect('/estudante')->with('sucess', 'Dados actualizados com sucesso');
    }

    public function destroy($id)
    {
        $estudante = Estudante::find($id);
        $estudante->delete();
        return redirect('/estudante')->with('message', 'Estudante deletado com sucesso!');
    }
}
