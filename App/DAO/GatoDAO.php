<?php 
include_once 'Conexao.php';

class GatoDAO {

    public function cadastrarGato(Gato $gato)
    {
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO gato (nomePet, idade, peso, sexo, raca, castrado, temperamento, idCliente)
        VALUES (:nomePet, :idade, :peso, :sexo, :raca, :castrado, :temperamento, :idCliente)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nomePet', $gato->getNomePet());
        $stmt->bindValue(':idade', $gato->getIdade());
        $stmt->bindValue(':peso', $gato->getPeso());
        $stmt->bindValue(':sexo', $gato->getSexo());
        $stmt->bindValue(':raca', $cachorro->getRaca());
        $stmt->bindValue(':castrado', $gato->getCastrado());
        $stmt->bindValue(':temperamento', $gato->getTemperamento());
        $stmt->bindValue(':idCliente', $gato->getIdCliente());
       

        $res = $stmt->execute();
        if($res)
        {
            echo "<script>alert('O gato foi cadastrado com sucesso');</script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
        echo "<script>location.href='../view/telasCRUD/crudGato.php';</script>";
    }

    public function listarGato(){
            include_once 'Conexao.php';

            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "SELECT * FROM gato ORDER BY idGato";
            return $conex->conn->query($sql);
        
    }

    public function alterarGato(Gato $gato)
    {
       
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "UPDATE gato SET nomePet = :nome, idade = :idade, peso = :peso,
            sexo = :sexo, raca= :raca, castrado = :castrado, temperamento = :temperamento WHERE idGato = :id";
        
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':nome', $gato->getNomePet());
            $stmt->bindValue(':idade', $gato->getIdade());
            $stmt->bindValue(':peso', $gato->getPeso());
            $stmt->bindValue(':sexo', $gato->getSexo());
            $stmt->bindValue(':raca', $gato->getRaca());
            $stmt->bindValue(':castrado', $gato->getCastrado());
            $stmt->bindValue('temperamento', $gato->getTemperamento());
            $stmt->bindValue(':id', $gato->getIdGato());
        
            $res = $stmt->execute();
        
            return $res;
        
    }
    public function excluirGato($idGato)
    {
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM gato WHERE idGato='$idGato'";
        $res = $conex->conn->query($sql);
        if($res)
        {
            echo "<script>alert('Exclusão do gato realizada com sucesso!');</script>";
        }
        else{
            echo "<script>alert('Não foi possível excluir o cachorro!');</script>";
        }
        echo "<script>location.href='../view/telasCRUD/crudGato.php';</script>";
    
    }

}

?>