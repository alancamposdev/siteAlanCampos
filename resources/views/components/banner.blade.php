
  <!--Banner Section -->
  {{ $slot }}
  <section class="banner page-section text-white mb-0 bg-dark">
      <div class="container ">
          <div class="banner-box">

          </div>
          <div class="banner-content text-white text-center">
              <div class=" text-white w-100 d-flex flex-column align-items-start">
                  <p class="lead h3 ">Olá, eu sou o
                      <span class="d-inline-block animate__animated animate__backInUp ">Alan Campos</span>
                  </p>

                  <a class="btn btn-outline-primary mt-3" href="{{ asset('/contato') }}">Entre em contato</a>
              </div>
              <!-- Imagem Avatar -->
              <img class="banner-avatar img-fluid" src="{{ asset('images/imagem1.png') }}" alt="">
              <!-- Masthead Heading-->
              <h1 class="banner-heading text-uppercase mb-0">Full Stack Developer JR</h1>
              <!-- Icon Divider-->
              <div class="divider-custom divider-light">
                  <div class="divider-custom-line"></div>
              </div>
              <!-- Masthead Subheading-->
              <p class="lead banner-subheading font-weight-light pb-3">Desenvolvimento de Sites </p>

              <div>
                {{$slot}}                
              </div>
          </div>

      </div>
  </section>
