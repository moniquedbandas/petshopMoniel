<?php
include_once 'Conexao.php';

class CachorroDAO
{

    public function cadastrarCachorro(Cachorro $cachorro)
    {
        include_once 'Conexao.php';
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
        echo "<script>location.href='../view/telasCRUD/crudCachorro.php';</script>";
    }

    public function listarCachorro()
    {

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cachorro WHERE idCachorro= :idCachorro ORDER BY idCliente";
        $query = $conex->conn->prepare($sql);
        $query->execute();
        return $query;
    }

    public function alterarCachorro(Cachorro $cachorro)
    {

        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE cachorro SET nomePet = :nome, idade = :idade, peso = :peso,
            sexo = :sexo, raca= :raca, castrado = :castrado, porte = :porte WHERE idCachorro = :id";

        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nome', $cachorro->getNomePet());
        $stmt->bindValue(':idade', $cachorro->getIdade());
        $stmt->bindValue(':peso', $cachorro->getPeso());
        $stmt->bindValue(':sexo', $cachorro->getSexo());
        $stmt->bindValue(':raca', $cachorro->getRaca());
        $stmt->bindValue(':castrado', $cachorro->getCastrado());
        $stmt->bindValue('porte', $cachorro->getPorte());
        $stmt->bindValue(':id', $cachorro->getIdCachorro());

        $res = $stmt->execute();

        return $res;
    }
    public function excluirCachorro($idCachorro)
    {
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM cachorro WHERE idCachorro='$idCachorro'";
        $res = $conex->conn->query($sql);
        if ($res) {
            echo "<script>alert('Exclusão do cachorro realizada com sucesso!');</script>";
        } else {
            echo "<script>alert('Não foi possível excluir o cachorro!');</script>";
        }
        echo "<script>location.href='../view/telasCRUD/crudCachorro.php';</script>";
    }
}
