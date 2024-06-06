<?php
class UsuarioDAO{
    
    public function autenticarUsuario($email, $senha)
    {
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if($email && $senha == $email['senha']){
            echo "<script>alert('Bem vindo!');</script>";
        }
        else {
            return false;
        }

    }
}