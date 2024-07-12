<!-- NO CACHORRO, SERA USADO O ID E NAME OC. NO GATO, SERA USADO OG. NO CLIENTE SERA USADO OP. NO USUARIO SERA USADO OU -->
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
    <title>Petshop Moniel</title>
</head>

<body>
    <?php
    session_start();
    switch ($_REQUEST['ou']) {
        case "autenticar";
            autenticar();
            break;
    }


    function autenticar()
    {
        if (!empty($_REQUEST["email"]) && !empty($_REQUEST["password"])) {
            $email = $_REQUEST["email"];
            $senha = $_REQUEST["password"];
            include '../UsuarioController.php';
            $contr = new UsuarioController();
            $usuarioLogado = $contr->autenticarUsuario($email, $senha);
            if ($usuarioLogado) {
                $_SESSION['user_id'] = $usuarioLogado; //se usuario e senha corretos, entra
                echo "<script>location.href='../../view/telasCadastros/telaEscolherCadastro.php';</script>";
            } else {
                echo "<script>alert('Usuario ou senha incorretos');</script>";
                echo "<script>location.href='../../view/telaLogin.php';</script>";
            }
        }
    }
    ?>

</body>

</html>