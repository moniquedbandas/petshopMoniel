<?php
require_once 'Animal.php';

class Gato extends Animal
{

    protected $idGato;
    protected $temperamento;

    public function __construct($idGato, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente)
    {
        parent::__construct($nomePet, $idade, $peso, $sexo, $raca, $castrado, $idCliente);
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
        include_once "../../DAO/GatoDAO.php";
        $gatoDAO = new GatoDAO();
        $gatoDAO->cadastrarGato($this);
    }
    public function listarGato()
    {
        include_once "../DAO/GatoDAO.php";
        $dao = new GatoDAO();
        return $dao->listarGato();
    }
    public function alterarGato(Gato $gato)
    {
    }
    public function excluirGato($idGato)
    {
    }
}
