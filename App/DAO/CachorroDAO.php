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

    public function listarCachorro()
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cachorro ORDER BY idCachorro";
        $query = $conex->conn->prepare($sql);
        $query->execute();
        return $query;
    }

    public function alterarCachorro(Cachorro $cachorro)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE cachorro SET nomePet = :nome, idade = :idade, peso = :peso,
            sexo = :sexo, raca= :raca, castrado = :castrado, porte = :porte WHERE idCachorro = :idCachorro";

        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nome', $cachorro->getNomePet());
        $stmt->bindValue(':idade', $cachorro->getIdade());
        $stmt->bindValue(':peso', $cachorro->getPeso());
        $stmt->bindValue(':sexo', $cachorro->getSexo());
        $stmt->bindValue(':raca', $cachorro->getRaca());
        $stmt->bindValue(':castrado', $cachorro->getCastrado());
        $stmt->bindValue(':porte', $cachorro->getPorte());
        $stmt->bindValue(':idCachorro', $cachorro->getIdCachorro());

        $res = $stmt->execute();

        return $res;
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
