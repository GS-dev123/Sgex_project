<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $request->validate([
            'nome_completo'=>'required',
            'data_de_nascimento'=>'required',
            'contacto'=>'required',
            'localizacao'=>'required',
        ]);

        $professor = new Professor([
            'nome_completo' => $request->get('nome_completo'),
            'data_de_nascimento' => $request->get('data_de_nascimento'),
            'contacto' => $request->get('contacto'),
            'localizacao' => $request->get('localizacao')
           
        ]);
        $professor->save();
        return redirect('/professor')->with('message', 'Professor registado com sucesso!');
    }

    
    public function show(professor $professor)
    {
        //
    }

    
    public function edit($id)
    {
        $professor = Professor::find($id);
        return view('edit_professor', compact('professor'));       
    }

 
    public function update(Request $request, $id)
    {

        $professor = Professor::find($id);
        $professor->nome_completo =  $request->get('nome_completo');
        $professor->data_de_nascimento = $request->get('data_de_nascimento');
        $professor->contacto = $request->get('contacto');
        $professor->localizacao = $request->get('localizacao');
        $professor->save();
        return redirect('/professor')->with('sucess', 'Dados actualizados com sucesso');
    }

    public function destroy($id)
    {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect('/professor')->with('message', 'Professor deletado com sucesso!');
    }
}
