<?php
session_start();

if (!isset($_SESSION['usuarioLogado'])) {
    header('Location: ../telaLogin.php');
    exit;
}
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

    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="16x16">
    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="../../../Public/css/estilosCadastro.css">
    <title>Petshop Moniel</title>
</head>

<body class="m-0 border-0 m-0 border-0">
    <header class="areaHeader">
        <nav class="navbar ">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../../index.php">
                    <img src="../../../Public/imagens/iconePet.png" alt="iconePatinha" width="30" height="24" class="d-inline-block align-text-top">
                    Petshop Moniel
                </a>
                <a class="logout" href="../../DAO/Logout.php">Sair</a>
            </div>
        </nav>
        <nav class="menuHeader">
            <ul>
                <li><a href="../telasCadastros/telaEscolherCadastro.php"><strong>Voltar</strong></a></li>
                <li><strong>Área de cadastro</strong></li>
            </ul>
        </nav>
    </header>

    <main class="cadastro">
        <div class="areaCadastroCli">
            <form class="formularioCadCliente" id="clienteForm" action="../../controller/Processamento/ProcessarCliente.php" method="post" onsubmit="return validateForm()">
                <fieldset>
                    <legend><strong>Bem vindo</strong></legend>

                    <div class="fieldset-wrapper">
                        <div class="input-wrapper">
                            <label for="nome">Nome: </label>
                            <input type="text" id="nome" name="nome" required autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="tel">Telefone: </label>
                            <input type="tel" id="tel" name="tel" required autocomplete="off" maxlength="15">
                        </div>
                        <div class="input-wrapper">
                            <label for="endereco">Endereço: </label>
                            <input type="text" id="endereco" name="endereco" required autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="cpf">CPF: </label>
                            <input type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14">
                        </div>
                        <div class="input-wrapper">
                            <label for="email">E-mail: </label>
                            <input type="text" id="email" name="email" required autocomplete="off">
                        </div>

                        <input type="hidden" id="op" name="op">
                        <div class="areaBotoes">
                            <input class="btListar" type="submit" name="criar" value="Criar" onclick="setOpValue('cadastrarUsuario');">
                            <input class="btListar" type="submit" name="listar" value="Listar" onclick="setOpValue('listarTela'); listarClientes(event);">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>

    <footer class="d-flex flex-wrap align-items-center" id="footerIndex">
        <div class="d-flex align-items-center">
            <a href="/" class=" me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <img src="../../../Public/imagens/patinha.png" alt="">
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

    <script src="../../../Public/JS/script.js"></script>
    <script src="../../../Public/JS/regex.js"></script>
</body>

</html>