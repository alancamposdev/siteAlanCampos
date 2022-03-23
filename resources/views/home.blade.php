@extends('layouts.main')

@section('titulo', 'Alan Campos - Desenvolvedor Full Stack')

@section('content')

    <x-banner>
        @foreach ($sociais as $social)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $social->linkSocial }}" target="_blank">
                <i class="{{ $social->icone }} fa-2x"></i>
            </a>
        @endforeach 
    </x-banner>

    {{-- Portfólio --}}
    <section id="portfolio" class="page-section portfolio">
        <div class="container mt-4">
            <!-- Portfolio Section Header-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <!-- divider icons-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star fa-2x"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- reference text -->
            <p class="text-center">Aqui estão alguns projetos em que trabalhei recentemente.</p>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">

                @foreach ($projetos as $projeto)
                    <!-- Portfolio Itens -->
                    <div class="col-md-6 mb-3">
                         <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                            data-bs-target="#{{ $projeto->id }}">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class="fas fa-plus fa-3x"></i></div>
                            </div>
                            {{-- <img class="img-fluid" src="{{ asset($projeto->urlImg) }}" alt="..." /> --}}
                        </div>
                    </div>

                    <!-- Portfolio Modal -->
                    <div class="portfolio-modal modal fade" id="{{ $projeto->idModal }}" tabindex="-1"
                        aria-labelledby="{{ $projeto->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header border-0"><button class="btn-close" type="button"
                                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body text-center pb-5">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <!-- Portfolio Modal - Title-->
                                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                    {{ $projeto->titulo }}
                                                </h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div>
                                                <!-- Portfolio Modal - Image-->
                                                {{-- <img class="img-fluid rounded mb-5"
                                                    src="{{ asset($projeto->urlImg) }}" alt="..." /> --}}

                                                <!-- Portfolio Modal - Text-->
                                                <p class="mb-4"> {{ $projeto->descricao }}</p>
                                                <!-- button-->
                                                <a class="btn btn-dark d-inline-block animate__animated animate__tada animate__repeat-3"
                                                    href="{{ $projeto->linkProjeto }}"
                                                    target="_blank">
                                                    Veja esse projeto no github
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}

            </div>
        </div>
    </section> 

    <x-about />

    <x-contact />

@endsection
