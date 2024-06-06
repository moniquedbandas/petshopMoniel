<?php
class ProcessarUsuario {
   
    function autenticar()
    {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        include 'UsuarioController.php';
        $contr = new UsuarioController();
        if ($contr->autenticarUsuario($email, $senha)) {
            echo "<script>location.href='../../view/telasCadastros/telaEscolherCadastro.php';</script>";
        } else {
            echo "Email ou senha incorretos.";
        }
    }

}

