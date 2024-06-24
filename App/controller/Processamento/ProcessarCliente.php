<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/estilos.css">
    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="16x16">
    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="32x32">
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <title>PETSHOP MONIEL</title>
</head>

<body>
    <?php
    switch ($_REQUEST['op']) {
        case "criarTela":
            criarTela();
            break;
        case "criarUsuario":
            criarUsuario();
            break;
        case "autenticar":
            autenticar();
            break;
        case "telaBoasVindas":
            telaBoasVindas();
            break;
        default:
            echo "Erro no processamento das requisições.";
    }
    function criarTela()
    {
        echo "<script>location.href='../../view/telasCadastros/telaCadastroCliente.php';</script>";
    }

    function criarUsuario()
    {
    }

    function autenticar()
    {
    }

    function telaBoasVindas()
    {
        echo "<script>location.href='../../view/telasCadastros/telaEscolherCadastro.php';</script>";
    }
    ?>
</body>

</html>