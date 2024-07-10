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
        $email = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($email && $senha == $email['senha']) {
            return true;
        } else {
            return false;
        }
    }
}
