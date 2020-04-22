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
      $this->validate($request,[
            'nome_completo'=>'required|min:6|max:50',
            'localizacao'=>'required|min:3|max:50',
            'contacto'=>'required|min:9|numeric',
            'data_de_nascimento'=>'required'
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
            'data_de_nascimento.required'=>'Introduza a data de Nascimento'
            
        ]);
  
        $data = [
            'nome_completo' => request('nome_completo'),
            'data_de_nascimento' => request('data_de_nascimento'),
            'contacto' => request('contacto'),
            'localizacao' => request('localizacao')
        ];  
        $response = professor::create($data);
        return redirect()->route("professor.index")->with('sucess', 'Professor registado com sucesso');
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
        $this->validate($request,[
            'nome_completo'=>'required|min:6|max:50',
            'localizacao'=>'required|min:3|max:50',
            'contacto'=>'required|min:9|numeric',
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
