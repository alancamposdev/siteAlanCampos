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

                        {{-- tratamento de erros --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Preencha os dados corretamente</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if($message = Session::get('success'))                        
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Obrigado!</strong> {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>OPS !</strong>
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               
                        </div>                            
                        @endif
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="nome" type="text" placeholder=""  required/>
                            <label for="name">Nome</label>
                                                      
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email</label>
                                                  
                        </div>

                        <!-- Assunto input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="assunto" name="assunto" type="text" placeholder="" required>
                            <label for="assunto">Assunto</label>
                            
                        </div>

                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea 
                            class="form-control" 
                            id="mensagem" 
                            name="mensagem"                            
                            style= "height:auto;" 
                            placeholder="Digite sua mensagem" 
                            data-sb-validations="required" required>                          
                            </textarea>
                            <label for="mensagem">Mensagem</label>
                            
                        </div>                      
                       
                        

                        
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar Mensagem</button>
                        
                                               
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    <x-footer/>
</body>
</html>