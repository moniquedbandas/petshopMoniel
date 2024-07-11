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
    public function resgataPorID($idGato)
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM gato WHERE idGato = :idGato";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':idGato', $idGato);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function listarGato()
    {
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM gato ORDER BY idCliente";
        $query = $conex->conn->prepare($sql);
        $query->execute();
        return $query;
    }
    public function alterarGato(Gato $gato)
    {
        try {
            $conex = new Conexao();
            $conex->fazConexao();
            $conex->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE gato SET nomePet = :nomePet, idade = :idade, peso = :peso,
            sexo = :sexo, raca= :raca, castrado = :castrado, temperamento = :temperamento, idCliente = :idCliente WHERE idGato = :idGato";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':idGato', $gato->getIdGato());
            $stmt->bindValue(':nomePet', $gato->getNomePet());
            $stmt->bindValue(':idade', $gato->getIdade());
            $stmt->bindValue(':peso', $gato->getPeso());
            $stmt->bindValue(':sexo', $gato->getSexo());
            $stmt->bindValue(':raca', $gato->getRaca());
            $stmt->bindValue(':castrado', $gato->getCastrado());
            $stmt->bindValue(':temperamento', $gato->getTemperamento());
            $stmt->bindValue(':idCliente', $gato->getIdCliente());
            $res = $stmt->execute();
            if ($res === false) {
                throw new Exception("Erro ao executar a consulta");
            }
            echo "<script>location.href='../../controller/Processamento/ProcessarGato.php?og=listarTela';</script>";
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
            return false;
        }
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
