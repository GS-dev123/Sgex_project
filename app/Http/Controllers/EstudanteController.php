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
        $request->validate([
            'nome_completo'=>'required',
            'data_de_nascimento'=>'required',
            'contacto'=>'required',
            'curso_id'=>'required',
            'localizacao'=>'required'
        ]);

        $estudante = new Estudante([
            'nome_completo' => $request->get('nome_completo'),
            'data_de_nascimento' => $request->get('data_de_nascimento'),
            'contacto' => $request->get('contacto'),
            'curso_id' => $request->get('curso_id'),
            'localizacao' => $request->get('localizacao')
           
        ]);
        $estudante->save();
        return redirect('/estudante')->with('message', 'Estudante registado com sucesso!');
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
        $request->validate([
            'nome_completo'=>'required',
            'data_de_nascimento'=>'required',
            'contacto'=>'required',
            'curso_id'=>'required',
            'localizacao'=>'required'
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
