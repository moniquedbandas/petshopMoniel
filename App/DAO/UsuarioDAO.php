<<<<<<< HEAD
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
=======
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
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($usuario && $senha == $usuario['senha']) {
            return true;
        } else {
            return false;
        }
    }
}
>>>>>>> c106afb0ead034e203a2d3bb17182bae117f2ed0
