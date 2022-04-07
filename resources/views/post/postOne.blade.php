<head>
  <title>Post</title>
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
<body>
  <x-header/>

  <section class="page-section">
    <div class="banner_post container">
      
      <article class="row row-cols-1 mt-3">

        <div class="col-sm-12 heading p-3">
          <h1 class="display-3 text-white px-3">O trio que todo Dev.Jr front-end precisa dominar</h1>
          <p class="h4 text-white px-3">O que são? Onde vivem? Do que se alimentam?</p>
          
        </div>
        
        <!--cards-->
        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="html">
              <div class="text-center">
                <img class="card-img-top pb-1 img-fluid" src="{{asset('/images/posts/htm.png')}}" alt="">
              </div>              

              <div class="card-header">
                <h4>HTML</h4>
              </div>
              <div class="card-body">
                <h5 class="card-title mb-3">Linguagem de marcação</h5>
                <div class="card-text ">
                  <p>O <abbr title="Hyper Text Markup Language">HTML</abbr> é abreviação para linguagem de marcação de hyper texto criada por <em>Tim Berners-Lee</em>,  basicamente é a linguagem padrão para estruturação na criação de páginas web.</p> 
                  <p>O HTML é composto por elementos, e cada elemento é definido por etiquetas "tags", atributos com propriedade e valor, e pelo conteúdo contido dentro da tag </p>

                </div>
              </div>
            </div>            
            <div class="card-footer text-muted">
              ㅤ
            </div>
          </div>
        </div>

        <!--css-->
        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="css">
              <div class="text-center">
                <img class="card-img-top pb-1" src="{{asset('/images/posts/css.png')}}" alt="">
              </div>              
              <div class="card-header">
                <h4>CSS</h4>
              </div>
              <div class="card-body">
                <h5 class="card-title mb-3">Linguagem de estilização</h5>
                <div class="card-text">
                  <p><abbr title="Cascading Style Sheets">CSS</abbr>
                  são folhas de estilo em cascata. É responsavel pelo estilo de uma página web.
                  </p>
                  <p>
                    O que seria do HTML sem o CSS !? Provavelmente algo muito monótono. Graças ao CSS podemos dar vida a um layout.
                  </p>
                  <p>
                  Podemos adicionar estilo ao HTML através de seletores que ditaram as regras de estilo para as tags.
                  </p>
                </div>
              </div>

              <div class="card-footer text-muted">
                ㅤ
              </div>
            </div>
          </div>
        </div>

        <!--js-->
        <div class="col-sm-4">
          <div class="card mb-3">
            <div class="js">
              <div class="text-center">
                <img class="card-img-top  pb-1" src="{{asset('/images/posts/js.png')}}" alt="">
              </div>
              
              <div class="card-header">
                <h4>JavaScript</h4>
              </div>
              <div class="card-body">
                <h5 class="card-title mb-3">Linguagem de programação</h5>
                <div class="card-text">
                  <p>Seu nome oficial é <strong>ECMAScript</strong>,
                    considerada a linguagem de programação mais popular do mundo. Com ela podemos programar o comportamento das páginas web deixando-as mais dinâmicas com adição de slides,pop-ups, galerias de fotos, etc.</p>
                  <p>É uma linguagem gratuita e já vem implementado na maioria dos navegadores.</p>
                </div>
              </div>
              <div class="card-footer text-muted">
                ㅤ
              </div>
            </div>
          </div>
        </div>
        <address>
        
        <small>Posted by Alan Campos on <time> Abril 07,2022.</time></small> 
        </address>
        
      </article>
    </div>
  </section>


  <x-btnWhatsapp/>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<!-- Bootstrap Main -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
 
