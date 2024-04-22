<?php

class Animal
{

    protected $nomePet;
    protected $idade;
    protected $peso;
    protected $sexo;
    protected $raca;
    protected $castrado;
    protected $idCliente;

    public function __construct($nomePet, $idade, $peso, $sexo, $raca, $castrado, $idCliente)
    {

        $this->nomePet = $nomePet;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->sexo = $sexo;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->idCliente = $idCliente;
    }

    public function getNomePet()
    {
        return $this->nomePet;
    }

    public function setNomePet($value)
    {
        $this->nomePet = $value;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($value)
    {
        $this->idade = $value;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($value)
    {
        $this->peso = $value;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($value)
    {
        $this->sexo = $value;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($value)
    {
        $this->raca = $value;
    }

    public function getCastrado()
    {
        return $this->castrado;
    }

    public function setCastrado($value)
    {
        $this->castrado = $value;
    }
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}
