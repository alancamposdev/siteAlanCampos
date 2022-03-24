<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Contato - Alan Campos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Seo Metas-->
    <meta name="author" content="" />
    <meta name="description" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Font Awesome icons free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fontes-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles Main-->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>    
    <section class="page-section">
        <div class="container ">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contato</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">                  
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    
                    <form id="contactForm" method="POST" action="/contato">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="nome" type="text" placeholder="" required />
                            <label for="name">Nome</label>
                                                      
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email</label>
                                                  
                        </div>

                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="assunto" name="assunto" type="text" placeholder="(00) 00000-0000" required>
                            <label for="assunto">Assunto</label>
                            
                        </div>

                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="mensagem" name="mensagem" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="mensagem">Mensagem</label>
                            
                        </div>                      
                       
                        

                        <!-- Alert Messenger -->
                        @if(\Session::has('message'))
                            <button class="btn btn-outline-success btn-xl w-100" disabled>
                                {{ \Session::get('message') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-3 bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg><br>
                                
                            </button>
                            <div class=" alert bg-success p-3 text-white-50">Obrigado! Responderei o mais breve possível 
                                <p><a href="{{asset('/home')}}" class="alert-link">>> Clique aqui << </a>, para voltar a página inicial.</p>
                            </div>
                        @else
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar Mensagem</button>
                        @endif
                        <div class="mt-3">                            
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <x-footer/>
</body>
</html>