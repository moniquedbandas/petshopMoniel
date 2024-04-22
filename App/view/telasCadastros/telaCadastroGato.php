<!DOCTYPE html>
<html lang="en">

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
</head>

<body>

    <header>
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
                <li><strong>Área de cadastro gato</strong></li>
            </ul>
        </nav>

    </header>

    <main class="cadastro">
        <div class="areaCadastro">

            <div class="tituloFormCad">
                <h3>Bem vindo</h3>
            </div>

            <form action="../../controller/Processamento/ProcessarGato.php" method="post">
                <label for="id">ID do Tutor: </label>
                <br>
                <input type="text" id="id" name="id" autocomplete="off" required><br><br>
                <label for="nome">Nome do pet: </label>
                <br>
                <input type="text" id="nome" name="nome" autocomplete="off"><br><br>
                <label for="idade">Idade: </label>
                <br>
                <input type="text" id="idade" name="idade" autocomplete="off"><br><br>
                <label for="peso">Peso: </label>
                <br>
                <input type="text" id="peso" name="peso" autocomplete="off"><br><br>
                <label for="sexo">Sexo: </label>
                <br>
                <input type="text" id="sexo" name="sexo" autocomplete="off"><br><br>
                <label for="raca">Raça: </label>
                <br>
                <input type="text" id="raca" name="raca" autocomplete="off"><br><br>
                <label for="castrado">Castrado: </label>
                <br>
                <input type="text" id="castrado" name="castrado" autocomplete="off"><br><br>
                <label for="temperamento">Temperamento: </label>
                <br>
                <input type="text" id="temperamento" name="temperamento" autocomplete="off"><br><br>

                <input type="hidden" id="og" name="og">
                <div class="areaBotoes3">
                    <input type="hidden" name="og" value="criarGato">
                    <input type="submit" name="create" value="Cadastrar">

                    <input type="hidden" name="og" value="listarGato">
                    <input type="submit" name="listar" value="Listar">
                </div>
            </form>
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