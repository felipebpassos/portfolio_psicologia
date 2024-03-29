<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <!-- Definições default -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ... meta tags, título e icone ... -->
    <?php echo isset($description) && !empty($description) ? '<meta name="description" content="' . $description . '">' : ''; ?>
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="icon" href="http://localhost/gabi/public/img/logo-ico.ico">

    <!-- ... estilos ... -->
    <link rel="stylesheet" href="http://localhost/gabi/public/styles/styles.css">
    <link rel="stylesheet" href="http://localhost/gabi/public/styles/footer.css">
    <?php
    foreach ($styles as $style) {
        echo '<link rel="stylesheet" href="http://localhost/gabi/public/styles/' . $style . '.css">' . PHP_EOL;
    }
    ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Scripts (head) -->
    <?php
    foreach ($scripts_head as $script) {
        echo '<script src="http://localhost/gabi/public/script/' . $script . '.js"></script>';
    }
    ?>
</head>

<body class="hide-scroll">

    <!-- Cabeçalho -->
    <header>

        <a href="http://localhost/gabi/" class="logo">
            <img src="http://localhost/gabi/public/img/logo2.png" alt="Logo Psicóloga Gabriela Castro">
        </a>

        <nav>
            <ul>
                <li>Sobre Mim</li>
                <li>Agendar Horário</li>
                <li>Blog</li>
            </ul>
        </nav>

    </header>

    <nav class="redes-sociais">
        <ul>
            <li><a href="https://www.instagram.com/psigabrielacastrocm/" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/gabriela-castro-b77848226/?originalSubdomain=br" target="_blank"><i
                        class="fa-brands fa-linkedin"></i></a></li>
        </ul>
    </nav>

    <div class="foto-fundo">
        <img width="100%" src="http://localhost/gabi/public/img/gabi_fundo.jpg" alt="">
    </div>

    <main>

        <!-- Apresentação Principal -->
        <section class="apresentacao-principal">
            <div class="texto">
                <div>
                    <h1 class="fade-in-slide-up">GABRIELA<br>CASTRO</h1>
                    <h3 class="fade-in-slide-up">Psicoterapia | Saúde Mental | Bem-estar</h3>
                    <p class="fade-in-slide-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum
                        urna id ligula consequat,
                        eget dapibus magna fermentum. Integer id sagittis sapien, sit amet volutpat justo. Mauris sed
                        dapibus elit.</p>
                </div>
            </div>
            <img src="http://localhost/gabi/public/img/gabi1.png" id="imagem-fade" alt="">
            <div class="fade-bottom"></div>
        </section>

        <!-- Sobre -->
        <section class="sobre">
            <div class="sobre-mim">
                <div class="container">
                    <div class="row">
                        <!-- Coluna 1 -->
                        <div class="col-md-5">
                            <img class="titulo-img fade-in-slide-up" src="http://localhost/gabi/public/img/sobre.png" alt="">
                            <img class="caffe-img fade-in-slide-up" src="http://localhost/gabi/public/img/gabi_caffe.jpg" alt="">
                        </div>
                        <!-- Coluna 2 -->
                        <div class="col-md-7">
                            <p class="texto fade-in-slide-up">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum urna id ligula
                                consequat, eget dapibus magna fermentum. Integer id sagittis sapien, sit amet volutpat
                                justo. Mauris sed dapibus elit. Nulla nec massa vel lacus accumsan tincidunt. Cras ut
                                nunc id neque pharetra pharetra eu eu magna. Proin vel velit eget nunc congue mattis.
                                <br><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum urna id ligula
                                consequat, eget dapibus magna fermentum. Integer id sagittis sapien, sit amet volutpat
                                justo. Mauris sed dapibus elit. Nulla nec massa vel lacus accumsan tincidunt. Cras ut
                                nunc id neque pharetra pharetra eu eu magna. Proin vel velit eget nunc congue mattis.
                                <br><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum urna id ligula
                                consequat, eget dapibus magna fermentum. Integer id sagittis sapien, sit amet volutpat
                                justo. Mauris sed dapibus elit. Nulla nec massa vel lacus accumsan tincidunt. Cras ut
                                nunc id neque pharetra pharetra eu eu magna. Proin vel velit eget nunc congue mattis.
                            </p>
                            <button class="btn-1 fade-in-slide-up">Agende uma consulta</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formacao">
                <img class="titulo-img fade-in-slide-up" src="http://localhost/gabi/public/img/formacao.png" alt="">
            </div>
        </section>

        <!-- Tratamentos -->
        <section class="tratamentos">

        </section>

    </main>

    <!-- Rodapé -->
    <footer>
        <div class="copyright">
            &copy; 2024, Desenvolvido por <a href="https://www.instagram.com/simplifyweb/" target="_blank">Simplify
                Web</a>
        </div>
    </footer>

    <a href="https://api.whatsapp.com/send?phone=5579999858914" class="whatsapp-button" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- js files (body) -->
    <?php
    foreach ($scripts_body as $script) {
        echo '<script src="http://localhost/gabi/public/script/' . $script . '.js"></script>';
    }
    ?>
</body>

</html>