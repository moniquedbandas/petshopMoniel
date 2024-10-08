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
                <li><a href="../telasCadastros/telaCadastroCliente.php"><strong>Voltar</strong></a></li>
            </ul>
        </nav>
    </header>

    <main class="crud">
        <form id="formComp" action="../../controller/Processamento/ProcessarCliente.php" method="post">
            <div class="table-responsive-sm text-center">
                <table class="table caption-top">
                    <caption>Listagem de clientes</caption>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../../controller/ClienteController.php");
                        $res = ClienteController::listarCliente();
                        if ($res && $res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_OBJ)) {
                        ?>
                                <tr>
                                    <td><?= $row->idCliente ?></td>
                                    <td><?= $row->nomeCliente ?></td>
                                    <td><?= $row->telefone ?></td>
                                    <td><?= $row->endereco ?></td>
                                    <td><?= $row->cpf ?></td>
                                    <td><?= $row->email ?></td>
                                    <td>
                                        <a class="btListar" href="./alterarCliente.php?idCliente=<?= $row->idCliente ?>">Editar</a>
                                        <a class="btListar" href="../../controller/Processamento/ProcessarCliente.php?op=excluirCliente&idCliente=<?= $row->idCliente ?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="10">Nenhum cliente encontrado.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </form>

    </main>

    <footer class="d-flex flex-wrap align-items-center position-fixed bottom-0" id="footerIndex">
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

    <script src="../../Public/JS/script.js"></script>
    <script src="../../Public/JS/arquivoRegex.js"></script>

</body>

</html>