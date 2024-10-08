<?php
session_start();

if (!isset($_SESSION['usuarioLogado'])) {
    header('Location: ../telaLogin.php');
    exit;
}
require_once '../../DAO/ClienteDAO.php';
require_once '../../model/Cliente.php';
$cliente = new Cliente();
$clientes = $cliente->listarCliente();
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

    <link rel="icon" href="../../../Public/imagens/patinha.png" type="image/png" sizes="16x16">
    <link rel="icon" href="../../../Public/imagens/patinha.png" type="image/png" sizes="32x32">
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
        <div class="areaCadastro">
            <form class="formularioCadCachorro" id="cachorroForm" action="../../controller/Processamento/ProcessarCachorro.php" method="post">
                <fieldset>
                    <legend><strong>Bem vindo</strong></legend>

                    <div class="fieldset-wrapper">
                        <div class="input-wrapper">
                            <label for="nomePet">Nome do pet: </label>
                            <input type="text" id="nomePet" name="nomePet" required autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="idade">Idade: </label>
                            <input type="text" id="idade" name="idade" title="Informe em anos" required autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="peso">Peso: </label>
                            <input type="text" id="peso" name="peso" title="Informe em kg" required autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="sexo">Sexo: </label>
                            <select name="sexo" id="sexo" required>
                                <option selected value="">Escolha uma opção</option>
                                <option value="Femea">Fêmea</option>
                                <option value="Macho">Macho</option>
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <label for="raca">Raça: </label>
                            <input type="text" id="raca" name="raca" required autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="castrado">Castrado: </label>
                            <select name="castrado" id="castrado" required>
                                <option selected value="">Escolha uma opção</option>
                                <option value="Sim">Sim</option>
                                <option value="Nao">Não</option>
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <label for="porte">Porte: </label>
                            <input type="text" id="porte" name="porte" required autocomplete="off">
                        </div>
                        <div class="input-wrapper">
                            <label for="idCliente">ID do Tutor: </label>
                            <select name="idCliente" id="idCliente">
                                <?php
                                while ($row = $clientes->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value='" . $row["idCliente"] . "'>" . $row["nomeCliente"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <input type="hidden" id="oc" name="oc">
                        <div class="areaBotoes">
                            <input class="btListar" type="submit" name="create" value="Cadastrar" onclick="setOcValue('cadastrarCachorro')">
                            <input class="btListar" type="submit" name="listar" value="Listar" onclick="setOcValue('listarTela'); listarCachorros(event);">
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

    <script src="../../../Public/JS/script.js"></script>
</body>

</html>