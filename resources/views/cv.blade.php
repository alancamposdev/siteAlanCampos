<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?&family=Sacramento&display=swap" rel="stylesheet">
    <meta name="keywords" content="">

    <link href="{{ mix('css/cv.css') }}" rel="stylesheet">
    <title>Curriculum Online</title>

</head>

<body id="curriculum" class="t-light">
    <div class="container">

        <header class="header">
            <div class="logo">
                <a href="/">
                    AlanCampos
                </a>

            </div>
            <div class="toggle-container">
                <span class="theme">Light</span>

                <div id="btn-tema" class="toggle" onclick="toogle()">
                    <span class="circle"></span>
                </div>
                <span class="theme">Dark</span>
            </div>
        </header>
        <div class="banner">
            <h1>Curriculum Online</h1>
        </div>
        <main>
            <!--conteúdo principal-->


            <section class="contato">
                <address class="endereco">
                    <p>Rolim de Moura - RO</p>
                    <p>Tel: (69) 984067550</p>
                    <p>Email: alancamposdeveloper@gmail.com</p>

                </address>

                <div class="nome">
                    <h2>Alan Ramos de Campos</h2>
                </div>

                <div class="link">
                    <a href="https://github.com/devmastercampos" target="_blank">github.com/DevAlanCampos</a>
                    <a href="https://www.linkedin.com/in/alancamposdeveloper/"
                        target="_blank">linkedin.com/in/alancamposdeveloper</a>
                </div>
            </section>


            <section class="habilidades">
                <div class="title">
                    <h3>Habilidades</h3>
                </div>
                <div class="desc">
                    <p>HTML5, CSS3, Sass, JavaScript, Bootstrap, Banco de dados SQL, Git, Python</p>
                </div>
            </section>

            <section class="Objetivo">
                <div class="title">
                    <h3>Objetivo</h3>
                </div>
                <div class="desc">
                    <p>Desenvolvedor Front-End Junior</p>
                </div>
            </section>

            <section class="Projetos">
                <div class="title">
                    <h3>Projetos</h3>
                </div>
                <div class="desc">
                    <p><em>Site e-commerce</em> | HTML, CSS, JS, | <a href="/">link para o projeto</a></p>
                    <ul>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div class="desc">
                    <p>
                        <em>Blog Pessoal</em> | HTML, CSS, JS, |<a href="/">link para o projeto</a>
                    </p>
                    <ul>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div class="desc">
                    <p>
                        <em>Projeto 3</em> | HTML, CSS, JS, |<a href="/">link para o projeto</a>
                    </p>
                    <ul>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                    </ul>
                </div>
            </section>

            <section class="">
                <div class="title">
                    <h3>Experiência Profissional</h3>
                </div>
                <div class="desc">
                    <p></p>
                </div>
            </section>
            <section class="">
                <div class="title">
                    <h3>Educação e Idiomas</h3>
                </div>
                <div class="desc">
                    <p>Curso Superior de Tecnologia em Análise e Desenvolvimento de Sistemas (2021-2022).</p>
                    <p>Inglês básico</p>
                </div>
            </section>

            <section class="Projetos">
                <div class="title">
                    <h3>Pessoal</h3>
                </div>
                <div class="desc">
                    <p>
                        Olá, atualmente sou funcionário público e estou em processo de transição de carreira. Tenho a cada dia procurado me qualificar com um curso superior e cursos na área de programação web. 

                    </p>
                </div>
                <div class="badge-base LI-profile-badge" data-locale="pt_BR" data-size="medium" data-theme="dark" data-type="VERTICAL" data-vanity="alancamposdeveloper" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://br.linkedin.com/in/alancamposdeveloper?trk=profile-badge"></a></div>
              
            </section>
        </main>
    </div>

    <script>
        let botao = document.querySelector('#btn-tema');

        function toogle() {
            let doc = document.querySelector('#curriculum');
            doc.classList.toggle('t-light');
            doc.classList.toggle('t-dark');
        }
    </script>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>

</body>

</html>
