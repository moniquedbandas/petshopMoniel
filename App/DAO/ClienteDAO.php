<?php
include_once 'Conexao.php';
class ClienteDAO
{
    public function cadastrarCliente(Cliente $cliente)
    {
        $conex = new Conexao();
        $conex->fazConexao();

        $sqlChecarCpf = "SELECT COUNT(*) FROM cliente WHERE cpf = :cpf";
        $stmtChecarCpf = $conex->conn->prepare($sqlChecarCpf);
        $stmtChecarCpf->bindValue(':cpf', $cliente->getCpf());
        $stmtChecarCpf->execute();
        $count = $stmtChecarCpf->fetchColumn();
        if ($count > 0) {
            echo "<script>alert('Já existe um cliente com este CPF.');</script>";
        } else {
            $sql = "INSERT INTO cliente (nomeCliente, telefone, endereco, cpf, email)
            VALUES (:nomeCliente, :telefone, :endereco, :cpf, :email)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':nomeCliente', $cliente->getNomeCliente());
            $stmt->bindValue(':telefone', $cliente->getTelefone());
            $stmt->bindValue(':endereco', $cliente->getEndereco());
            $stmt->bindValue(':cpf', $cliente->getCpf());
            $stmt->bindValue(':email', $cliente->getEmail());
            $res = $stmt->execute();
            if ($res) {
                echo "<script>alert('Cadastro do cliente realizado com sucesso');</script>";
            } else {
                echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
            }
        }
    }

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

    public function listarCliente()
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cliente ORDER BY idCliente";
        $query = $conex->conn->prepare($sql);
        $query->execute();
        return $query;
    }

    public function alterarCliente(Cliente $cliente)
    {
        try {
            $conex = new Conexao();
            $conex->fazConexao();
            $conex->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE cliente SET nomeCliente = :nomeCliente, telefone = :telefone, endereco = :endereco, cpf = :cpf, email = :email WHERE idCliente = :idCliente";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':idCliente', $cliente->getIdCliente());
            $stmt->bindValue(':nomeCliente', $cliente->getNomeCliente());
            $stmt->bindValue(':telefone', $cliente->getTelefone());
            $stmt->bindValue(':endereco', $cliente->getEndereco());
            $stmt->bindValue(':cpf', $cliente->getCpf());
            $stmt->bindValue(':email', $cliente->getEmail());
            $res = $stmt->execute();
            if ($res === false) {
                throw new Exception("Erro ao executar a consulta.");
            }
            echo "<script>alert('Alteração do cliente feita com sucesso!');</script>";
            echo "<script>location.href='../../controller/Processamento/ProcessarCliente.php?op=listarTela';</script>";
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
            return false;
        }
    }

    public function excluirCliente($idCliente)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM cliente WHERE idCliente = :idCliente";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindParam(':idCliente', $idCliente, PDO::PARAM_INT);
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Exclusão do cliente realizada com sucesso!');</script>";
        } else {
            echo "<script>alert('Não foi possível excluir o usuário!');</script>";
        }
        return $res;
    }
}
