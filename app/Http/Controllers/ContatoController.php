<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;


class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/contato');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         //envia para o banco de dados
        Contato::create ([
        'nome' => $request -> nome,
        'email'=> $request -> email,
        'assunto' => $request -> assunto,
        'mensagem' => $request -> mensagem
        ]);
        
        $request->validate([
            'nome' => 'required|string',
            'email'=> 'required|email',
            'assunto' => 'required|string',
            'mensagem' => 'required'
        ],        
        );

        $data = array (
            'nome' => $request->nome,
            'email'=> $request->email,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem
        );

        Mail::to( config('mail.from.address'))
        ->send(new Sendmail($data));

        return redirect()->back()->with([
            'message' => 'Sucesso'
        ]);

       
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato)
    {
        //
    }
   
}
