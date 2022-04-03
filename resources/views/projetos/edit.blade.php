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

                <form action="{{ route('projetos.update', $projeto->id) }}" method="POST" enctype="multipart/form-data"/>
                @csrf
                @method('PUT')
                <div class="row g-3 mb-3">
                    <div class="col mb-3">                       
                        <input type="text" 
                        class="form-control" 
                        id="titulo" 
                        name="titulo" 
                        placeholder="Nome do projeto"
                        value="{{ $projeto->titulo }}">
                    </div> 

                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrição</span>
                        <textarea 
                        class="form-control" 
                        aria-label="descricao" 
                        name="descricao" 
                        id="descricao">
                        {{$projeto->descricao}}
                        </textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">link repositório</span>
                        <input type="text" 
                        class="form-control" 
                        id="linkProjeto" 
                        name="linkProjeto"
                        placeholder="https://meu-repositorio.com.br" 
                        aria-label="Server"
                        value="{{$projeto->linkProjeto}}"/>
                    </div>
                    
                    <div class="input-group mb-3">

                        <label for="imagem "class="input-group-text" >
                            Imagem do projeto
                        </label>
                        <input type="file" 
                        class="form-control" 
                        name="imagem" 
                        id="imagem"       
                        aria-label="Server"
                        value="{{$projeto->imagem}}">

                    </div>
                    <!--img src="/images/projetos/{{$projeto->imagem}}" id="preview" alt="Project Image {{$projeto->titulo}}" class="img-circle img-sm"  style="width: 600px"-->

                </div>                

                <div class="mb-3 text-center">
                    <button type="submit" class="btn-lg btn-primary">Editar projeto</button>
                </div>
                </form>
            </div>
    </section>
@endsection

@push('javascript')
<!--script>
    $('#preview').on('click', function() {
        $(this).src = 'link novo'
    })
</!--scr--ipt>
@endpush