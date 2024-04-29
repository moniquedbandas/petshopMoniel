<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="../../../Public/imagens/patinha.png" type="image/png" sizes="16x16">
    <link rel="icon" href="../../../Public/imagens/patinha.png" type="image/png" sizes="32x32">
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="../../../Public/css/estilosCadastro.css">
    <title>PETSHOP MONIEL</title>
</head>

<body>
    <div class="content">
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
                    <li><strong>Área de cadastro cachorro</strong></li>
                </ul>
            </nav>
        </header>

        <main class="cadastro">
            <div class="areaCadastro">

                <form action="../../controller/Processamento/ProcessarCachorro.php" method="post">
                    <fieldset>
                        <legend><strong>Bem vindo</strong></legend>

                        <div class="fieldset-wrapper">
                            <div class="input-wrapper">
                                <label for="id">ID do Tutor: </label>
                                <input type="text" id="id" name="id" autocomplete="off" required>
                            </div>
                            <div class="input-wrapper">
                                <label for="nome">Nome do pet: </label>
                                <input type="text" id="nome" name="nome" autocomplete="off">
                            </div>
                            <div class="input-wrapper">
                                <label for="idade">Idade: </label>
                                <input type="text" id="idade" name="idade" autocomplete="off">
                            </div>
                            <div class="input-wrapper">
                                <label for="peso">Peso: </label>
                                <input type="text" id="peso" name="peso" autocomplete="off">
                            </div>
                            <div class="input-wrapper">
                                <label for="sexo">Sexo: </label>
                                <input type="text" id="sexo" name="sexo" autocomplete="off">
                            </div>
                            <div class="input-wrapper">
                                <label for="raca">Raça: </label>
                                <input type="text" id="raca" name="raca" autocomplete="off">
                            </div>
                            <div class="input-wrapper">
                                <label for="castrado">Castrado: </label>
                                <input type="text" id="castrado" name="castrado" autocomplete="off">
                            </div>
                            <div class="input-wrapper">
                                <label for="porte">Porte: </label>
                                <input type="text" id="porte" name="porte" autocomplete="off">
                            </div>

                            <input type="hidden" id="oc" name="oc">
                            <div class="areaBotoes2">
                                <input type="hidden" name="oc" value="criarCachorro">
                                <input type="submit" name="create" value="Cadastrar">

                                <input type="hidden" name="oc" value="listarCachorro">
                                <input type="submit" name="listar" value="Listar">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

        </main>

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
    </div>

</body>

</html>