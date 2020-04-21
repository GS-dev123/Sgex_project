<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professor;

class ProfessorController extends Controller
{
   
    public function index()
    {
        $professors = professor::all();
        return view('professor', compact('professors'));
    }

    
    public function create()
    {
       return view('add_professor'); 
    }

    
    public function store(Request $request)
    {
        $data = [
            'nome_completo' => request('nome_completo'),
            'data_de_nascimento' => request('data_de_nascimento'),
            'contacto' => request('contacto'),
            'localizacao' => request('localizacao')
        ];
        professor::create($data);
        return redirect('/professor')->with('message', 'Professor registado com sucesso');
    }


    public function show(Professor $id)
    {   $professores = Professor::find($id);
        return view('/show_professor', compact('professores'));
    }

    
    public function edit(Professor $id)
    {
       $professors = Professor::find($id);
        return view('/edit_professor', compact('professors','id'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_completo' => 'required',
            'data_nascimento' => 'required',
            'contacto' => 'required',
            'localizacao' => 'required'
        ]);
        $professor = Professor::find($id);
        $professor->nome_completo =  $request->get('nome_completo');
        $professor->data_de_nascimento = $request->get('data_nascimento');
        $professor->contacto = $request->get('contacto');
        $professor->localizacao = $request->get('localizacao');
        $professor->save();
        return redirect('/professor')->with('success', 'Dados actualizados com sucesso');
    }

    public function destroy($id)
    {
       $professor = professor::find($id);
        $professor->delete();
        return redirect('/professor')->with('sucess', 'Dados do professor apagados com sucesso');
        
    }
}
