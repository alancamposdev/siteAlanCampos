@extends('layouts.main')

@section('titulo', ' Admin - Criar Projeto')

@section('content')

    <section class="page-section page-projects">
        
        {{-- add novos projetos --}}
        <div class="box new-projects">

            <div class="container p-3 d-flex flex-column">

                <!-- divider icons-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <h3 class="box-title">Novo Projeto</h3>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>

                <form action="{{ route('projetos.store') }}" method="POST" enctype="multipart/form-data" />
                @csrf
                
                    <div class="col mb-3">                       
                        <input type="text" 
                        class="form-control" 
                        id="titulo" 
                        name="titulo" 
                        placeholder="Nome do projeto">
                    </div>                    
                
                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrição</span>
                        <textarea 
                        class="form-control" 
                        aria-label="descricao" 
                        name="descricao" 
                        id="descricao">
                        </textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">link repositório</span>
                        <input type="text" 
                        class="form-control" 
                        id="linkProjeto" 
                        name="linkProjeto"
                        placeholder="https://meu-repositorio.com.br" 
                        aria-label="Server">
                    </div>
                <div class="input-group mb-3">

                    <label for="imagem "class="input-group-text" >
                        Imagem do projeto
                    </label>
                    <input type="file" 
                    class="form-control" 
                    name="imagem" 
                    id="imagem"       
                    aria-label="Server">
                </div>
                                      
                <div class="mb-3 text-center">
                    <button type="submit" class="btn-lg btn-primary">Adicionar</button>
                </div>
                </form>
            </div>
    </section>
@endsection
