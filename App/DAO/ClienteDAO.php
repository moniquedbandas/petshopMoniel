<?php
include_once 'Conexao.php';

class ClienteDAO
{
    public function cadastrarCliente(Cliente $cliente)
    {
        include_once 'Conexao.php';
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
        $stmt->bindValue(':senha', $cliente->getSenha());
       

        $res = $stmt->execute();
        if($res)
        {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
        echo "<script>location.href='../view/telasCadastros/telaEscolherCadastro.php';</script>";
    }
    
    public function listarCliente()
    {
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cliente ORDER BY idCliente";
        return $conex->conn->query($sql);
    }

    public function alterarCliente(Cliente $cliente)
    {
       
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "UPDATE cliente SET nomeCliente = :nome, telefone = :telefone, endereco = :endereco,
            email = :email, senha= :senha WHERE idCliente = :id";
        
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':id', $cliente->getIdCliente());
            $stmt->bindValue(':nome', $cliente->getNomeCliente());
            $stmt->bindValue(':telefone', $cliente->getTelefone());
            $stmt->bindValue(':endereco', $cliente->getEndereco());
            $stmt->bindValue(':email', $cliente->getEmail());
            $stmt->bindValue(':senha', $cliente->getSenha());
        
            $res = $stmt->execute();
        
            return $res;
        
    }
    public function excluirCliente($idCliente)
    {
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM cliente WHERE idCliente='$idCliente'";
        $res = $conex->conn->query($sql);
        if($res)
        {
            echo "<script>alert('Exclusão realizada com sucesso!');</script>";
        }
        else{
            echo "<script>alert('Não foi possível excluir o usuário!');</script>";
        }
        echo "<script>location.href='../view/telasCRUD/crudCliente.php';</script>";
    
    }
}
