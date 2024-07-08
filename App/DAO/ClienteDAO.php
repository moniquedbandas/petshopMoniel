<?php
include_once 'Conexao.php';

class ClienteDAO
{
    public function cadastrarCliente(Cliente $cliente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO cliente (nomeCliente,telefone, endereco, cpf, email, senha)
        VALUES (:nomeCliente, :telefone, :endereco, :cpf, :email, :senha)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomeCliente', $cliente->getNomeCliente());
        $stmt->bindValue(':telefone', $cliente->getTelefone());
        $stmt->bindValue(':endereco', $cliente->getEndereco());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue(':email', $cliente->getEmail());
        // $stmt->bindValue(':senha', $cliente->getSenha());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
        // echo "<script>location.href='../../App/view/telasCadastros/telaEscolherCadastro.php';</script>"; 
    }
<<<<<<< HEAD
    
    public function listarCliente()
=======

    public function resgataPorID($idCliente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cliente WHERE idCliente = :idCliente";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':idCliente', $idCliente);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function listarCliente($cpf)
>>>>>>> c106afb0ead034e203a2d3bb17182bae117f2ed0
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cliente WHERE cpf= :cpf ORDER BY idCliente";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':cpf', $cpf);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function alterarCliente(Cliente $cliente)
    {
        try {
            $conex = new Conexao();
            $conex->fazConexao();

            $conex->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE cliente SET nomeCliente = :nome, telefone = :telefone, endereco = :endereco,
            email = :email WHERE idCliente = :idCliente";
            $stmt = $conex->conn->prepare($sql);

            $stmt->bindValue(':id', $cliente->getIdCliente());
            $stmt->bindValue(':nome', $cliente->getNomeCliente());
            $stmt->bindValue(':telefone', $cliente->getTelefone());
            $stmt->bindValue(':endereco', $cliente->getEndereco());
            $stmt->bindValue(':cpf', $cliente->getCpf());
            $stmt->bindValue(':email', $cliente->getEmail());
            // $stmt->bindValue(':senha', $cliente->getSenha());

            $res = $stmt->execute();
            if ($res === false) {
                throw new Exception("Erro ao executar a consulta.");
            }
            echo "<script>location.href='../controller/Processamento/ProcessarCliente.php?oc=listarTela';</script>";
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
            return false;
        }
    }
    public function excluirCliente($idCliente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM cliente WHERE idCliente=:idCliente";
        $stmt = $conex->conn->query($sql);
        $stmt->bindParam(':idCliente', $idCliente, PDO::PARAM_INT);
        $res = $stmt->execute();

        return $res;
        // if ($res) {
        //     echo "<script>alert('Exclusão realizada com sucesso!');</script>";
        // } else {
        //     echo "<script>alert('Não foi possível excluir o usuário!');</script>";
        // }
        // echo "<script>location.href='../../App/view/telasCRUD/crudCliente.php';</script>";
    }
}
