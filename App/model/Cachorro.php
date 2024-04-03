<?php
require_once 'Animal.php';

class Cachorro extends Animal
{
    protected $idCachorro;
    protected $porte;

    public function __construct($idCachorro, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte)
    {
        parent::__construct($nomePet, $idade, $peso, $sexo, $raca, $castrado);
        $this->idCachorro = $idCachorro;
        $this->porte = $porte;
    }

    public function getIdCachorro()
    {
        return $this->idCachorro;
    }

    public function setIdCachorro($value)
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

    public function cadastrarCachorro(Cachorro $cachorro)
    {
    }

    public function listarCachorro()
    {
    }
    public function alterarCachorro(Cachorro $cachorro)
    {
    }
    public function excluirCachorro($idCachorro)
    {
    }
}
