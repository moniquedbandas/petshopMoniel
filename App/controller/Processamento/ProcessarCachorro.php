<!-- NO CACHORRO, SERA USADO O ID E NAME OC. NO GATO, SERA USADO OG. NO CLIENTE SERA USADO OP. -->
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
    echo $_REQUEST['oc'];
    var_dump('oc');
    switch ($_REQUEST['oc']) {
        case "listarTela";
            listarTela();
            break;
        case "cadastrarCachorro";
            cadastrarCachorro();
            break;
        case "telaAlterarCachorro";
            telaAlterarCachorro();
            break;
        case "alterarCachorro";
            alterarCachorro();
            break;
        case "deletarCachorro";
            deletarCachorro();
            break;
    }
    function listarTela()
    {
        echo "<script>location.href='../../view/telasCRUD/listarCachorro.php';</script>";
    }
    function cadastrarCachorro()
    {
        $nomePet = $_POST['nomePet'];
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];
        $sexo = $_POST['sexo'];
        $raca = $_POST['raca'];
        $castrado = $_POST['castrado'];
        $porte = $_POST['porte'];
        $idCliente = $_POST['idCliente'];
        include_once '../CachorroController.php';
        $contr = new CachorroController();
        $contr->cadastrarCachorro($nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente);
        echo "<script>location.href='../../view/telasCadastros/telaCadastroCachorro.php';</script>";
    }
    function telaAlterarCachorro()
    {
        // echo "<script>location.href='../../../../view/telasCRUD/alterarCachorro.php';</script>";
    }
    function alterarCachorro()
    {
    }
    function deletarCachorro()
    {
    }

    ?>
</body>

</html>