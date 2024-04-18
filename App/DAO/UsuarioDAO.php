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

        public function logarUsuario(Usuario $usuario) {
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "SELECT * FROM usuario WHERE email='$username' AND senha='$password'";
            $result = $conn->query($sql);

            // Verifica se encontrou um registro correspondente
            if ($result->num_rows == 1) {
                // Login bem sucedido, redireciona para a página menuAdmin.html
                header("Location: ");
                exit();
            } 

        }


    }

$conn->close();
?>