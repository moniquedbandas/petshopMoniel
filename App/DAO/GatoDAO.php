<?php
include_once 'Conexao.php';

class GatoDAO
{

    public function cadastrarGato(Gato $gato)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO gato (nomePet, idade, peso, sexo, raca, castrado, temperamento, idCliente)
        VALUES (:nomePet, :idade, :peso, :sexo, :raca, :castrado, :temperamento, :idCliente)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomePet', $gato->getNomePet());
        $stmt->bindValue(':idade', $gato->getIdade());
        $stmt->bindValue(':peso', $gato->getPeso());
        $stmt->bindValue(':sexo', $gato->getSexo());
        $stmt->bindValue(':raca', $gato->getRaca());
        $stmt->bindValue(':castrado', $gato->getCastrado());
        $stmt->bindValue(':temperamento', $gato->getTemperamento());
        $stmt->bindValue(':idCliente', $gato->getIdCliente());

        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('O gato foi cadastradinho com sucesso');</script>";
        } else {
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
    }

    public function listarGato()
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM gato ORDER BY idGato";
        $query = $conex->conn->prepare($sql);
        $query->execute();
        return $query;
    }

    public function alterarGato(Gato $gato)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE gato SET nomePet = :nome, idade = :idade, peso = :peso,
            sexo = :sexo, raca= :raca, castrado = :castrado, temperamento = :temperamento WHERE idGato = :idGato";

        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nome', $gato->getNomePet());
        $stmt->bindValue(':idade', $gato->getIdade());
        $stmt->bindValue(':peso', $gato->getPeso());
        $stmt->bindValue(':sexo', $gato->getSexo());
        $stmt->bindValue(':raca', $gato->getRaca());
        $stmt->bindValue(':castrado', $gato->getCastrado());
        $stmt->bindValue(':temperamento', $gato->getTemperamento());
        $stmt->bindValue(':idGato', $gato->getIdGato());

        $res = $stmt->execute();

        return $res;
    }

    public function deletarGato($idGato)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM gato WHERE idGato = :idGato";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindParam(':idGato', $idGato, PDO::PARAM_INT);
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('O gato foi deletadinho com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro: Não foi possível realizar a exclusão.');</script>";
        }
        return $res;
    }
}
