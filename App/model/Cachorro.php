<?php
require_once 'Animal.php';

class Cachorro extends Animal
{
    protected $idCachorro;
    protected $porte;


    public function __construct($idCachorro, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente)
    {
        parent::__construct($nomePet, $idade, $peso, $sexo, $raca, $castrado, $idCliente);
        $this->idCachorro = $idCachorro;
        $this->porte = $porte;
    }

    public function getidCachorro()
    {
        return $this->idCachorro;
    }

    public function setidCachorro($value)
    {
        $this->idCachorro = $value;
    }

    public function getPorte()
    {
        return $this->porte;
    }

    public function setPorte($value)
    {
        $this->porte = $value;
    }

    public function cadastrarCachorro(Cachorro $cachorroDAO)
    {
        include_once "../../DAO/CachorroDAO.php";
        $cachorroDAO = new CachorroDAO();
        $cachorroDAO->cadastrarCachorro($this);
    }
    public function listarCachorro()
    {
        include_once "../../DAO/CachorroDAO.php";
        $dao = new CachorroDAO();
        return $dao->listarCachorro();
    }
    public function resgataPorID($idCachorro)
    {
        include_once "../../DAO/CachorroDAO.php";
        $model = new CachorroDAO(null);
        return $model->resgataPorID($idCachorro);
    }
    public function alterarCachorro(Cachorro $cachorro)
    {
        include_once "../../DAO/CachorroDAO.php";
        $cachorroDAO = new CachorroDAO();
        $cachorroDAO->alterarCachorro($cachorro);
    }
    public function deletarCachorro($idCachorro)
    {
        include_once "../../DAO/CachorroDAO.php";
        $cachorro = new CachorroDAO();
        $cachorro->deletarCachorro($idCachorro);
    }
}
