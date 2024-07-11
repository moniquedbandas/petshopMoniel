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
    <link rel="stylesheet" href="./Public/css/teste.css">
    <title>Petshop Moniel</title>
</head>

<body>
    <?php
    echo $_REQUEST['op'];
    switch ($_REQUEST['op']) {
            // case "criarTela":
            //     criarTela();
            //     break;
        case "listarTela";
            listarTela();
            break;
        case "cadastrarUsuario":
            cadastrarUsuario();
            break;
        case "alterarCliente";
            alterarCliente();
            break;

        case "excluirCliente";
            excluirCliente();
            break;
        default:
            echo "Erro no processamento das requisições.";
    }
    // function criarTela()
    // {
    //     echo "<script>location.href='../../view/telasCadastros/telaCadastroCliente.php';</script>";
    // }

    function listarTela()
    {
        echo "<script>location.href='../../view/telasCRUD/listarCliente.php';</script>";
    }
    function cadastrarUsuario()
    {
        $nomeCliente = $_POST['nome'];
        $telefone = $_POST['tel'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        include_once '../ClienteController.php';
        $contr = new ClienteController();
        $contr->cadastrarCliente($nomeCliente, $telefone, $endereco, $cpf, $email);
        echo "<script>location.href='../../view/telasCadastros/telaCadastroCliente.php';</script>";
    }
    function alterarCliente()
    {
        $idCliente = $_REQUEST['idCliente'];
        $nomeCliente = $_POST['nomeCliente'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        include_once '../ClienteController.php';
        $contr = new ClienteController();
        $contr->alterarCliente($idCliente, $nomeCliente, $telefone, $endereco, $cpf, $email);
    }

    function excluirCliente()
    {
        if (isset($_GET['idCliente'])) {
            $idCliente = $_GET['idCliente'];
            include_once '../ClienteController.php';
            $controller = new ClienteController();
            $controller->excluirCliente($idCliente);
            echo "<script>location.href='../../view/telasCRUD/listarCliente.php';</scrip>";
        } else {
            echo 'Erro: ID do cliente não identificado.';
        }
    }
    ?>
</body>

</html>