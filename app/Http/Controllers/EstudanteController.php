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

    public function show(estudante $estudante)
    {
        //
    }

    public function edit(Estudante $id)
    {
        $estudantes = Curso::find($id);
        return view('/edit_estudante', compact('estudantes','id'));
    }

    public function update(Request $request, estudante $estudante)
    {
        //
    }

    public function destroy(estudante $estudante)
    {
        //
    }
}
