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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $id)
    {
        return view('the_id', compact('id'));
    }

    
    public function edit(Professor $id)
    {
        $id_lines = Professor_line::all();
        return view('/add_professor', compact('id','id_line'));
    }

    
    public function update(Request $request, $id)
    {

        $professor->nome_completo = $request->nome_completo;
        $professor->data_nascimento = $request->data_de_nascimento;
        $professor->contacto = $request->contacto;
        $professor->localizacao = $request->localizacao;
        $professor->save();
        return redirect('/professor')->with('sucess', 'Dados actualizados com sucesso');
    }

    public function destroy($id)
    {
        $professor = professor::find($id);
        $professor->delete();

        return redirect('/professor')->with('sucess', 'Dados do professor apagados com sucesso');
    }
}
