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
                        <a class="nav-link" href="#">Sobre nós</a>
                        <a class="nav-link" href="#">Especialidades</a>
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
                        <img src="./Public/imagens/banner1.png" class="img-fluid" alt="Imagem do carrossel 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./Public/imagens/banner2.png" class="img-fluid" alt="Imagem do carrossel 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./Public/imagens/banner3.png" class="img-fluid" alt="Imagem do carrossel 3">
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
        <section class="m-0 border-0 bd-example m-0 border-0 bd-example-cssgrid">
            <!-- <h2 class="especialidades">Especialidades</h2> -->
            <div class="grid text-center" id="catalog">
                <div class="g-col-12 g-col-md-4">
                    <img src="./Public/imagens/grid/fofinho.jpeg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>Breed runner 2058</h6>
                        <div class="tags">
                            <span>Ficção</span>
                        </div>
                    </figcaption>
                </div>
                <div class="g-col-12 g-col-md-4">
                    <img src="./Public/imagens/grid/fofinho2.jpeg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>A erupção dos Jedi</h6>
                        <div class="tags">
                            <span>Ficção</span>
                        </div>
                    </figcaption>
                </div>
                <div class="g-col-12 g-col-md-4">
                    <img src="./Public/imagens/grid/galaxy.jpg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>A misteriosa gruta Zaralek</h6>
                        <div class="tags">
                            <span>Aventura</span>
                        </div>
                    </figcaption>
                </div>
                <div class="g-col-12 g-col-md-4">
                    <img src="./Public/imagens/grid/chamada.jpeg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>Plantas fantásticas e onde habitam</h6>
                        <div class="tags">
                            <span>Ciência</span>
                        </div>
                    </figcaption>
                </div>
                <div class="g-col-12 g-col-md-4">
                    <img src="./Public/imagens/grid/chamada2.jpeg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>As guerras e onde elas começam</h6>
                        <div class="tags">
                            <span>História</span>
                        </div>
                    </figcaption>
                </div>
                <div class="g-col-12 g-col-md-4">
                    <img src="./Public/imagens/grid/galaxy.jpg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>Doctor..Who?</h6>
                        <div class="tags">
                            <span>Lazer</span>
                        </div>
                    </figcaption>
                </div>
                <!-- <div class="g-col-12 g-col-md-4">
                    <img src="./assets/capa11.jpeg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>The light Tower</h6>
                        <div class="tags">
                            <span>Lazer</span>
                        </div>
                    </figcaption>
                </div>
                <div class="g-col-12 g-col-md-4">
                    <img src="./assets/capa12.jpeg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>Sheerlok Holnes</h6>
                        <div class="tags">
                            <span>Lazer</span>
                        </div>
                    </figcaption>
                </div>
                <div class="g-col-12 g-col-md-4">
                    <img src="./assets/capa12.jpeg" alt="Imagem aleatoria">
                    <figcaption class="details">
                        <h6>Sheerlok Holnes</h6>
                        <div class="tags">
                            <span>Lazer</span>
                        </div>
                    </figcaption>
                </div> -->
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
            <li class="ms-3"><a class="text-body-secondary" href="https:/www.facebook.com/monique.bandas/" target="_blank">
                    <i class="fa-brands fa-facebook" style="font-size: 30px"></i>
                </a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https:/www.instagram.com/moniquebandas/" target="_blank">
                    <i class="fab fa-instagram" style="font-size: 30px"></i>
                </a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://api.whatsapp.com/send?phone=5551998852381" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp" style="font-size: 30px"></i>
                </a></li>
        </ul>
    </footer>

    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <script src="./Public/JS/script.js"></script>
</body>

</html>