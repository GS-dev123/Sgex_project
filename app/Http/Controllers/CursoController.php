<?php

namespace App\Http\Controllers;

use App\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
   
    public function index()
    {
        $curso = Curso::all();

        return view('curso', compact('curso'));
    }

    
    public function create()
    {
        return view('add_curso');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome'=>'required|min:3|max:50',
            'duracao'=>'required|min:3|max:6|numeric',
            'numero_de_disciplinas'=>'required|min:30|max:50|numeric',
            'preco'=>'required|min:5000|max:50000|numeric'
        ],[
            'nome.required'=>'Introduz o nome do curso!!',
            'nome.min'=>'NOME...A quantidade de caracteres nao deve ser menor que 3',
            'nome.max'=>'NOME...A quantidade de caracteres nao deve ser maior que 50',
            'duracao.required'=>'Introduz a duracao do curso!!',
            'duracao.min'=>'DURACAO...Duracao Invalida, os numero devem ser maior que 3',
            'contacto.max'=>'CONTACTO...Contacto Invalido, os numero devem ser menor que 50',
            'contacto.numeric'=>'Duracao Invalida,O campo só permite números',
            'numero_de_disciplinas.required'=>'Introduz o número de disciplinas!!',
            'numero_de_disciplinas.min'=>'Nr de disciplinas... Invalido, número de cararcteres invalido',
            'numero_de_disciplinas.max'=>'Nr de disciplinas...Invalido, número de cararcteres invalido',
            'preco.required'=>'Introduza Preco',
            'preco.min'=>'O preco de ser maior que 50000 e menor que 50000'
            
        ]);

        $curso = new Curso([
            'nome' => $request->get('nome'),
            'duracao' => $request->get('duracao'),
            'numero_de_disciplinas' => $request->get('numero_de_disciplinas'),
            'preco' => $request->get('preco')
           
        ]);
        $curso->save();
        return redirect('/curso')->with('sucess', 'Curso registado com sucesso!');
    }

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
        $this->validate($request,[
            'nome'=>'required|min:3|max:50',
            'duracao'=>'required|min:3|max:6|numeric',
            'numero_de_disciplinas'=>'required|min:30|max:50|numeric',
            'preco'=>'required|min:5000|max:50000|numeric'
        ],[
            'nome.required'=>'Introduz o nome do curso!!',
            'nome.min'=>'NOME...A quantidade de caracteres nao deve ser menor que 3',
            'nome.max'=>'NOME...A quantidade de caracteres nao deve ser maior que 50',
            'duracao.required'=>'Introduz a duracao do curso!!',
            'duracao.min'=>'DURACAO...Duracao Invalida, os numero devem ser maior que 3',
            'contacto.max'=>'CONTACTO...Contacto Invalido, os numero devem ser menor que 50',
            'contacto.numeric'=>'Duracao Invalida,O campo só permite números',
            'numero_de_disciplinas.required'=>'Introduz o número de disciplinas!!',
            'numero_de_disciplinas.min'=>'Nr de disciplinas... Invalido, número de cararcteres invalido',
            'numero_de_disciplinas.max'=>'Nr de disciplinas...Invalido, número de cararcteres invalido',
            'preco.required'=>'Introduza Preco',
            'preco.min'=>'O preco de ser maior que 50000 e menor que 50000'
            
        ]);
        $curso = Curso::find($id);
        $curso->nome =  $request->get('nome');
        $curso->duracao = $request->get('duracao');
        $curso->numero_de_disciplinas = $request->get('numero_de_disciplinas');
        $curso->preco = $request->get('preco');
        $curso->save();
        return redirect('/curso')->with('sucess', 'Dados actualizados com sucesso');
    }

    public function destroy($id)
    {
        $curso = curso::find($id);
        $curso->delete();
        return redirect('/curso')->with('message', 'curso deletado com sucesso!');
    }
}
