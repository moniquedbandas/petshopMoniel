<?php
include_once 'Conexao.php';

class UsuarioDAO
{
    public function autenticarUsuario($email, $senha)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $emailUser = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($emailUser && $senha == $emailUser['senha']) {
            $_SESSION['user_id'] = $email;
            header('Location: ../../view/telasCadastros/telaEscolherCadastro.php');
            exit;
        } else {
            return false;
        }
    }
}
