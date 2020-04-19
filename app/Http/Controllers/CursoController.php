<?php

namespace App\Http\Controllers;

use App\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = Curso::all();

        return view('curso', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_curso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nome'=>'required',
            'duracao'=>'required',
            'numero_de_disciplinas'=>'required',
            'preco'=>'required',
        ]);

        $curso = new Curso([
            'nome' => $request->get('nome'),
            'duracao' => $request->get('duracao'),
            'numero_de_disciplinas' => $request->get('numero_de_disciplinas'),
            'preco' => $request->get('preco')
           
        ]);
        $curso->save();
        return redirect('/curso')->with('message', 'Curso registado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $id)
    {
        $cursos = Curso::find($id);
        return view('/show_curso', compact('cursos'));
    }

    public function edit(Curso $id)
    {
        $cursos = Curso::find($id);
        return view('/edit_curso', compact('cursos','id'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nome'=>'required',
            'duracao'=>'required',
            'numero_de_disciplinas'=>'required',
            'preco'=>'required'
        ]);
        $curso = Curso::find($id);
        $curso->nome =  $request->get('nome');
        $curso->duracao = $request->get('duracao');
        $curso->numero_de_disciplinas = $request->get('numero_de_disciplinas');
        $curso->preco = $request->get('preco');
        $curso->save();
        return redirect('/curso')->with('sucess', 'Dados actualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = curso::find($id);
        $curso->delete();
        return redirect('/curso')->with('message', 'curso deletado com sucesso!');
    }
}
