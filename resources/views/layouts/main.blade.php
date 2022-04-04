<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Seo Metas-->
    <meta name="author" content="Alan Campos" />
    <meta name="description" content="desenvolvedor web, front-end, site pessoal" />
    <meta name="keywords" content="desenvolvedor web, front-end, site pessoal" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Font Awesome icons free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Google fontes-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Styles Main-->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
</head>

<body id="page-top">
    <x-header/>

    <main>
        @yield('content')
    </main>

    <x-footer />

    <x-btnScrool />
    {{-- https://wa.me/55(aqui seu numero com ddd | tudo junto)?text=Adorei%20seu%20artigo --}}

    <a href="https://api.whatsapp.com/send?phone=556984067550" target="_blank" class="btnWhats animate__animated animate__bounce animate__repeat-3 3">
    <i style="margin-top:16px" class="fa fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Bootstrap Main -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
