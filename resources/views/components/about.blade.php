{{-- Sobre mim --}}
<section id="about" class="page-section ">
    <div class="container">
        <!-- Titulo da seção-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Sobre mim</h2>
        <!-- Icones-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">

                <i class="fa-regular fa-handshake fa-2x"></i>

            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Conteudo da seção-->
        <div>
            <div class="row  p-3 text-center ">
                <div class="col-8 d-flex flex-column flex-fill align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <p class="lead"> Prazer em conhecê-lo.
                            Gosto de codificar coisas do zero e
                            dar vida
                            a ideias no navegador.
                        </p>
                    </div>
                    <div class="col-lg-4 ">
                        <p class="lead ">...
                        </p>
                    </div>
                    <!-- About Section Button-->
                    <div class="text-center mt-4">
                        <a class="btn btn-xl btn-primary" href="{{ asset('/cv') }}">
                            <i class="fa-solid fa-file-lines"></i>
                            Online CV!
                        </a>
                        <a class="btn btn-xl btn-outline-primary"
                        href="{{ asset('/assets/Profile.pdf') }}" download>
                            <i class="fas fa-download me-2"></i>
                            Curriculum Download!
                        </a>
                    </div>
                </div>
                <div class="col-4 d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('assets/images/imagem2.png') }}" alt="">
                </div>
            </div>
        </div>

    </div>
    </section>
