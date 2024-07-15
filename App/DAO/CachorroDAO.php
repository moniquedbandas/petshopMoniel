<?php
include_once 'Conexao.php';

class CachorroDAO
{

    public function cadastrarCachorro(Cachorro $cachorro)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO cachorro (nomePet, idade, peso, sexo, raca, castrado, porte, idCliente)
        VALUES (:nomePet, :idade, :peso, :sexo, :raca, :castrado, :porte, :idCliente)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomePet', $cachorro->getNomePet());
        $stmt->bindValue(':idade', $cachorro->getIdade());
        $stmt->bindValue(':peso', $cachorro->getPeso());
        $stmt->bindValue(':sexo', $cachorro->getSexo());
        $stmt->bindValue(':raca', $cachorro->getRaca());
        $stmt->bindValue(':castrado', $cachorro->getCastrado());
        $stmt->bindValue(':porte', $cachorro->getPorte());
        $stmt->bindValue(':idCliente', $cachorro->getIdCliente());

        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('O cachorro foi cadastrado com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
    }
    public function resgataPorID($idCachorro)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cachorro WHERE idCachorro = :idCachorro";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':idCachorro', $idCachorro);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function listarCachorro()
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cachorro ORDER BY idCliente";
        $query = $conex->conn->prepare($sql);
        $query->execute();
        return $query;
    }

    public function alterarCachorro(Cachorro $cachorro)
    {
        try {
            $conex = new Conexao();
            $conex->fazConexao();
            $conex->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE cachorro SET nomePet = :nomePet, idade = :idade, peso = :peso,
            sexo = :sexo, raca= :raca, castrado = :castrado, porte = :porte, idCliente = :idCliente WHERE idCachorro = :idCachorro";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':idCachorro', $cachorro->getidCachorro());
            $stmt->bindValue(':nomePet', $cachorro->getNomePet());
            $stmt->bindValue(':idade', $cachorro->getIdade());
            $stmt->bindValue(':peso', $cachorro->getPeso());
            $stmt->bindValue(':sexo', $cachorro->getSexo());
            $stmt->bindValue(':raca', $cachorro->getRaca());
            $stmt->bindValue(':castrado', $cachorro->getCastrado());
            $stmt->bindValue(':porte', $cachorro->getPorte());
            $stmt->bindValue(':idCliente', $cachorro->getIdCliente());

            $res = $stmt->execute();
            if ($res === false) {
                throw new Exception("Erro ao executar a consulta");
            }
            echo "<script>alert('O cachorro foi alterado com sucesso!');</script>";
            echo "<script>location.href='../../controller/Processamento/ProcessarCachorro.php?oc=listarTela';</script>";
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
            return false;
        }
    }

    public function deletarCachorro($idCachorro)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM cachorro WHERE idCachorro= :idCachorro";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindParam(':idCachorro', $idCachorro, PDO::PARAM_INT);
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('O cachorro foi deletadinho com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro: Não foi possível realizar a exclusão.');</script>";
        }
        return $res;
    }
}
