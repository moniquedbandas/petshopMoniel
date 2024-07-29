<?php
session_start();
$isLogado = isset($_SESSION['usuarioLogado']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/5bc1ff5e4a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="icon" href="./Public/imagens/patinha.png" type="image/png" sizes="16x16">
    <link rel="icon" href="./Public/imagens/patinha.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="./Public/css/estilos.css">
    <title>Petshop Moniel</title>
</head>

<body class="m-0 border-0 m-0 border-0">
    <header class="areaHeader">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">
                    <img src="./Public/imagens/iconePet.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Petshop Moniel
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="#">Início</a>
                        <a class="nav-link" href="#sobreNos">Sobre nós</a>
                        <a class="nav-link" href="#especialidades">Especialidades</a>
                    </div>
                </div>
                <a class="navbar-brand" id="iconeLogin" href="<?php echo $isLogado ? './App/view/telasCadastros/telaEscolherCadastro.php' : './App/view/telaLogin.php'; ?>">
                    <img src="./Public/imagens/usuario.png" alt="iconeUsuario">
                </a>
            </div>
        </nav>
        <a href="./App/view/"></a>
    </header>
    <main class="p-3 border-0 border-0">
        <section class="p-3 m-0 border-0 bd-example m-0 border-0">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Public/imagens/pet1.png" class="img-fluid d-block mx-auto" alt="Imagem do carrossel 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./Public/imagens/pet2.png" class="img-fluid d-block mx-auto" alt="Imagem do carrossel 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./Public/imagens/pet3.png" class="img-fluid d-block mx-auto" alt="Imagem do carrossel 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <article id="sobreNos">
            <h4>Petshop e clínica veterinária Moniel</h4>
            <p>
                Bem-vindos à Moniel, sua pet shop e clínica veterinária em Porto Alegre! Desde 2016, estamos dedicados a proporcionar o melhor cuidado para os seus animais de estimação. Nossa missão é garantir a saúde e o bem-estar dos pets, oferecendo serviços de alta qualidade e atendimento personalizado.
                Na Moniel, contamos com uma ampla equipe de profissionais qualificados e apaixonados por animais, prontos para atender todas as necessidades dos seus bichinhos e também dos seus tutores. Seja para consultas veterinárias, procedimentos cirúrgicos, ou cuidados diários, estamos aqui para oferecer o melhor.
                Nossa estrutura moderna e equipada permite que realizemos desde simples check-ups até tratamentos mais complexos, sempre com o compromisso de cuidar dos seus pets com amor e dedicação.
                Venha nos visitar e descubra como podemos ajudar a manter seu amigo de quatro patas feliz e saudável. Na Moniel, seu pet encontra o cuidado que merece!
            </p>
        </article>
        <img src="./Public/imagens/imgInicial.jpg" alt="imagem ilustrativa" width="100%">
        <section>
            <h4 id="especialidades">Especialidades</h4>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./Public/imagens/grid/Cirurgias.png" alt="Cirurgias">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./Public/imagens/grid/Dermatologia.png" alt="Dermatologia">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./Public/imagens/grid/Fisioterapia.png" alt="Fisioterapia">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./Public/imagens/grid/Neurologia.png" alt="Neurologia">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./Public/imagens/grid/Nutrição.png" alt="Nutrição">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./Public/imagens/grid/Oftalmologia.png" alt="Oftalmologia">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="d-flex flex-wrap align-items-center" id="footerIndex">
        <div class="d-flex align-items-center">
            <a href="/" class=" me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <img src="./Public/imagens/patinha.png" alt="">
            </a>
            <span class="mb-md-0 text-body-secondary">&copy; Petshop Moniel</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="https://www.facebook.com/monique.bandas/" target="_blank">
                    <i class="fa-brands fa-facebook" style="font-size: 30px"></i>
                </a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/petshopmoniel/" target="_blank">
                    <i class="fab fa-instagram" style="font-size: 30px"></i>
                </a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://api.whatsapp.com/send?phone=5551998852381" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp" style="font-size: 30px"></i>
                </a></li>
            <li class="ms-3"><a class="text-body-secondary" href="mailto:petshopmoniel@gmail.com?cc=moniquedbandas@gmail.com">
                    <i class="fas fa-envelope" style="font-size: 30px;"></i>
                </a></li>
        </ul>
    </footer>

    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <script src="./Public/JS/script.js"></script>
</body>

</html>