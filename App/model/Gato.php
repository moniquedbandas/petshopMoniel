<?php
require_once 'Animal.php';
include_once "../../DAO/GatoDAO.php";
class Gato extends Animal
{
    protected $idGato;
    protected $temperamento;

    public function __construct($idGato, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente)
    {
        parent::__construct($nomePet, $idade, $peso, $sexo, $raca, $castrado, $idCliente);
        error_log("Criando objeto Gato com ID: " . $idGato);
        $this->idGato = $idGato;
        $this->temperamento = $temperamento;
    }

    public function getIdGato()
    {
        return $this->idGato;
    }

    public function setIdGato($value)
    {
        $this->idGato = $value;
    }

    public function getTemperamento()
    {
        return $this->temperamento;
    }

    public function setTemperamento($value)
    {
        $this->temperamento = $value;
    }

    public function cadastrarGato(Gato $gatoDAO)
    {
        $gatoDAO = new GatoDAO();
        $gatoDAO->cadastrarGato($this);
    }
    public function listarGato()
    {
        $dao = new GatoDAO();
        return $dao->listarGato();
    }
    public function resgataPorID($idGato)
    {
        $model = new GatoDAO(null);
        return $model->resgataPorID($idGato);
    }
    public function alterarGato(Gato $gato)
    {
        $gatoDAO = new GatoDAO();
        $gatoDAO->alterarGato($gato);
    }
    public function deletarGato($idGato)
    {
        $gato = new GatoDAO();
        $gato->deletarGato($idGato);
    }
}
