<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="16x16">
    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="32x32">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="../../../Public/css/estilosCadastro.css">
    <title>PETSHOP MONIEL</title>
</head>

<body>
    <header class="areaHeader">
        <div class="areaTitulo">
            <h2 class="titulo">Petshop Moniel</h2>
        </div>
        <div class="areaLogos">
            <div class="areaLogo">
                <a href="../../../index.html" title="Petshop Moniel">
                    <img src="../../../Public/imagens/iconePet.png" alt="Petshop Moniel" class="patinha">
                </a>
            </div>
        </div>
        <nav class="menuHeader">
            <ul>
                <li><strong>Área de cadastro</strong></li>
            </ul>
        </nav>

    </header>

    <main class="escolherCadastro">
        <div class="areaEscolha">

            <div class="tituloEscolha">
                <h2>O que deseja cadastrar?</h2>
            </div>

            <div class="escolha">
                <div class="opcao">
                    <input type="radio" id="cachorro" name="animal" value="Cachorro">
                    <label for="cachorro">Cachorro</label><br>
                </div>
                <div class="opcao">
                    <input type="radio" id="gato" name="animal" value="Gato">
                    <label for="gato">Gato</label><br><br>
                </div>
                <input type="submit" value="Selecionar">
            </div>
        </div>
    </main>

    <div id="js-heightControl" style="height: 0;">&nbsp;</div>
    <div class="linhaFooter"></div>
    <footer class="footerIndex">

        <section class="informacoes">
            <ul class="lista-info">
                <li class="info-redes">
                    <a href="https:/www.facebook.com/monique.bandas/" target="_blank">
                        <i class="fab fa-facebook" style="font-size: 20px; color: blue;"></i>
                    </a>
                </li>
                <li class="info-redes">
                    <a href="https:/www.instagram.com/moniquebandas/" target="_blank">
                        <i class="fab fa-instagram" style="font-size: 20px; color: violet;"></i>
                    </a>
                </li>
                <li class="info-redes">
                    <a href="https://api.whatsapp.com/send?phone=5551998852381" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp" style="font-size: 20px; color: green;"></i>
                    </a>
                </li>
                <li class="info-redes">
                    <a href="mailto:moniquedbandas@gmail.com?cc=xxhereistandxx@hotmail.com">
                        <i class="fas fa-envelope" style="font-size: 20px; color: blueviolet"></i>
                    </a>
                </li>
            </ul>
        </section>

        <p class="direitos"><b>&copy;2024 Petshop Moniel. All rights reserved</b></p>
    </footer>

    <script src="../../../Public/JS/script.js"></script>

</body>

</html>