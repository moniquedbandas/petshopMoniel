<?php 
    class UsuarioDAO {

        public function cadastrarUsuario(Usuario $usuario){
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "INSERT INTO usuario (email, senha)
            VALUES (:email, :senha)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':email', $usuario->getEmail());
            $stmt->bindValue(':senha', $usuario->getSenha());
           
           

            $res = $stmt->execute();
            if($res)
            {
                echo "<script>alert('Cadastro de Usuário realizado com sucesso');</script>";
            }
            else{
                echo "<script>alert('Erro: Não foi possível realizar o cadastro do Usuário');</script>";
            }
            
        }
    }

?>