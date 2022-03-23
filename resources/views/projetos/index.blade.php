@extends('layouts.main')

@section('titulo', ' Admin - Projetos')

@section('content')

    <section class="page-section page-projects">
        {{-- total de projetos --}}
        <div class="box-top container bg-success my-3">
            <div class=" text-white p-3 ">
                <div class="display-3 text-center">00</div>
                <h3 class="display-4 text-center">Total de Projetos</h3>
            </div>
            <div class="icon">
                <i class="bi bi-stack"></i>
            </div>
        </div>
        {{-- lista dos projetos --}}
        <div class="box list-projects container ">
            <div>
                <h3 class="box-title">Lista de Projetos</h3>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">Imagem</th>
                        <th>Nome</th>
                        <th>Link</th>
                        <th>Id-Modal</th>
                        <th>Criado em</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ asset($projeto->urlImg) }} --}}
                {{-- @foreach ( $projetos as $projeto)   
               
                  <tr>
                      <td><img src="{{asset ($projeto->urlImg)}}" alt="Project Image" class="img-circle img-sm"  style="width: 60px"></td>
                      <td> {{$projeto->titulo}}      </td>
                      <td> {{$projeto->linkProjeto}} </td>
                      <td> {{$projeto->idModal }}    </td>
                      <td> {{$projeto->created_at}}  </td>
                      <td>
                        <a href="/projetos/{{ $projeto-> id}}/edit" class="btn btn-primary btn-xs btn-flat">Editar</a>
                          <button type="button" class="btn btn-danger btn-xs btn-flat">Excluir</button>
                      </td>
                  </tr>

                @endforeach --}}
               
                </tbody>
            </table>

        </div>
       
    </section>
@endsection
