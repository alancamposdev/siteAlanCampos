<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //mostra uma lista de de variaveis vindas do BD.
    public function index()
    {
        $projetos = Projeto::all();
        $projetosTotal = count($projetos);
        return view('projetos.index',['projetos' => $projetos, 'projetosTotal' => $projetosTotal]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //mostra a view de criar novo projeto
    public function create()
    {
        return view('projetos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //recebe informações do BD e armazena no BD
    public function store(Request $request)
    {
        // Projeto::create($request->all());

        $projeto = new Projeto;
        $projeto->titulo = $request->titulo;
        $projeto->descricao = $request->descricao;
        $projeto->linkProjeto = $request->linkProjeto;
        $projeto->imagem = $request->imagem;
        

        //Image Upload
        if($request->hasFile('imagem') && $request->file('imagem')->isvalid())
        {

            $requestImage = $request->imagem;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images/projetos'), $imageName);

            $projeto->imagem = $imageName;
        
        }
        $projeto->save();
        return redirect('/projetos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto) 
    //retorna os dados a serem editados
    {   
        $projeto = Projeto::find();
        $projeto->id;

        return view('projetos.edit',['projeto' => $projeto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto, $id)
    //recebe e atualiza os dados no Banco de dados
    {   
        $projeto = Projeto::find($id);
        $projeto->titulo = $request->get ('titulo');
        $projeto->descricao = $request->get ('descricao');
        $projeto->linkProjeto = $request->get('linkProjeto');
        $projeto->imagem = $request->get('imagem');
        $projeto->save();

        //Projeto::findOrFail($request->id)->update($request->all());
       return redirect('/projetos'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Projeto::findOrFail($id)->delete();
        return redirect('/projetos');
    }
}
