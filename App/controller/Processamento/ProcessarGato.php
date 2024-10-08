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
    switch ($_REQUEST['og']) {
        case "listarTela";
            listarTela();
            break;
        case "cadastrarGato";
            cadastrarGato();
            break;
        case "alterarGato";
            alterarGato();
            break;
        case "deletarGato";
            deletarGato();
            break;
        default:
            echo "Erro no processamento das requisições.";
    }
    function listarTela()
    {
        echo "<script>location.href='../../view/telasCRUD/listarGato.php';</script>";
    }
    function cadastrarGato()
    {
        $nomePet = $_POST['nomePet'];
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];
        $sexo = $_POST['sexo'];
        $raca = $_POST['raca'];
        $castrado = $_POST['castrado'];
        $temperamento = $_POST['temperamento'];
        $idCliente = $_POST['idCliente'];
        include_once '../GatoController.php';
        $contr = new GatoController();
        $contr->cadastrarGato($nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente);
        echo "<script>location.href='../../view/telasCadastros/telaCadastroGato.php';</script>";
    }
    function alterarGato()
    {
        $idGato = $_POST['idGato'];
        $nomePet = $_POST['nomePet'];
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];
        $sexo = $_POST['sexo'];
        $raca = $_POST['raca'];
        $castrado = $_POST['castrado'];
        $temperamento = $_POST['temperamento'];
        $idCliente = $_POST['idCliente'];
        include_once '../GatoController.php';
        $contr = new GatoController();
        $contr->alterarGato($idGato, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente);
    }
    function deletarGato()
    {
        $idGato = $_GET['idGato'];
        include_once '../GatoController.php';
        $contr = new GatoController();
        $contr->deletarGato($idGato);
        echo "<script>location.href='../../view/telasCRUD/listarGato.php';</script>";
    }
    ?>
</body>

</html>