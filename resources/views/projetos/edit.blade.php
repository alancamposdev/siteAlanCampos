@extends('layouts.main')

@section('titulo', ' Admin - Editar Projetos')

@section('content')

    <section class="page-section page-projects">
        
       

        {{-- add novos projetos --}}
        <div class="box new-projects">

            <div class="container p-3 d-flex flex-column">

                <!-- divider icons-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <h3 class="box-title">Editar Projeto</h3>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>

                <form action="{{ route('projetos.store') }}" method="POST" />
                @csrf
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="My projeto" value="{{ $projeto->titulo }}">
                    </div>
                    <div class="col-md-6">
                        <label for="idModal" class="form-label">IDModal</label>
                        <input type="text" class="form-control" name="idModal" id="idModal"
                            placeholder="portfolioModal001"
                            value=" {{$projeto->idModal}}">

                    </div>
                </div>


                <div class="input-group mb-3">
                  <span class="input-group-text">Descrição</span>
                  <textarea class="form-control" aria-label="descricao" name="descricao" id="descricao" >{{$projeto->descricao}}
                  </textarea>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="linkProjeto">url do repositório</span>
                    <input type="text" class="form-control" id="linkProjeto" name="linkProjeto"
                    placeholder="https://repositorio.com.br" aria-label="Server"
                    value="{{$projeto->linkProjeto}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="urlImg">local da img</span>
                    <input type="text" class="form-control" name="urlImg" id="urlImg" placeholder="images/foto.jpg"
                        aria-label="Server"
                        value="{{$projeto->urlImg}}">
                </div>


                <div class="mb-3 text-center">
                    <button type="submit" class="btn-lg btn-primary">Editar projeto</button>
                </div>
                </form>
            </div>
    </section>
@endsection
