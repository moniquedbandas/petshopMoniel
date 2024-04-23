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
                <li><strong>Área de cadastro usuário</strong></li>
            </ul>
        </nav>

    </header>

    <main class="cadastro">
        <div class="areaCadastro">

            <form class="formularioCadUsuario" action="../../controller/Processamento/ProcessarCliente.php" method="post">
                <fieldset>
                    <legend><strong>Bem vindo</strong></legend>

                    <div class="fieldset-wrapper">
                        <div class="input-wrapper">
                            <label for="nome">Nome: </label>
                            <input type="text" id="nome" name="nome" autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="tel">Telefone: </label>
                            <input type="text" id="tel" name="tel" autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="endereco">Endereço: </label>
                            <input type="text" id="endereco" name="endereco" autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="cpf">CPF: </label>
                            <input type="text" id="cpf" name="cpf" autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="email">E-mail: </label>
                            <input type="text" id="email" name="email" autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="password">Senha: </label>
                            <input type="password" id="password" name="password" autocomplete="off">
                        </div>
                        <input type="hidden" id="op" name="op">
                        <div class="areaBotoes">
                            <input type="hidden" name="op" value="criarUsuario">
                            <input type="submit" name="criar" value="Criar" onclick="document.getElementById('op').value='telaBoasVindas'">
                        </div>
                    </div>
                </fieldset>
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