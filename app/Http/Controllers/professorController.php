<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professor;

class professorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = professor::all();
        return view('professor', compact('professores'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nome_completo' => request('nome_completo'),
            'data_nascimento' => request('data_nascimento'),
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $id)
    {
        $id_lines = Professor_line::all();
        return view('/add_professor', compact('id','id_line'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $professor->nome_completo = $request->nome_completo;
        $professor->data_nascimento = $request->data_nascimento;
        $professor->contacto = $request->contacto;
        $professor->localizacao = $request->localizacao;
        $professor->save();
        return redirect('/professor')->with('sucess', 'Dados actualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = professor::find($id);
        $professor->delete();

        return redirect('/professor')->with('sucess', 'Dados do professor apagados com sucesso');
    }
}
