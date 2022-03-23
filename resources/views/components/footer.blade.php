{{-- Rodapé --}}
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Adress-->
                <address class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Endereço</h4>
                    <p class="lead mb-0">
                        Avenida Porto Alegre 4941
                        <br />
                        Rolim de Moura - RO, BRASIL
                    </p>
                </address>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0 ">
                    <h4 class="text-uppercase mb-4">Redes sociais</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/profile.php?id=100013200011084" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/alancamposdev" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/alancamposdeveloper/" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                </div>
                <!-- Footer Navegation-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Navegação</h4>                
                        <ul class="list-inline">
                            <li>
                                <a class="d-block text-decoration-none" href="/home">Home</a>
                            </li>
                            <li>
                                <a class="d-block text-decoration-none" href="#about">Sobre</a>
                            </li>

                            <li>
                                <a class="d-block text-decoration-none" href="#portfolio">
                                    Portfolio</a>
                            </li>
                            <li>
                                <a class="d-block text-decoration-none" href="/contato">Contato</a>
                            </li>
                        </ul>               
                </div>
            </div>
            <p class="pt-3 m-0">Desenvolvido por
                <a href="/" class="text-decoration-none">Alan Campos</a>.
            </p>        
        </div>
    </footer>
    <!-- Copyright -->
    <div class="copyright text-center pb-5">
    @php
        $year = date('Y');
    @endphp
        <div class="container"><small>Copyright &copy;  <!--2021-->{{$year}}</small></div>
    </div>
