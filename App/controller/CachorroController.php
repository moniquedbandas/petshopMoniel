<?php
include_once '../../model/Cachorro.php';
class CachorroController
{
    public static function cadastrarCachorro($nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente)
    {
        $cachorro = new Cachorro(null, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente);
        $cachorro->cadastrarCachorro($cachorro);
    }
    public static function listarCachorro()
    {
        $cachorroDAO = new Cachorro(null, null, null, null, null, null, null, null, null);
        return $cachorroDAO->listarCachorro();
    }
    public static function resgataPorID($idCachorro)
    {
        $model = new Cachorro(null, null, null, null, null, null, null, null, null);
        return $model->resgataPorID($idCachorro);
    }
    public function alterarCachorro($idCachorro, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente)
    {
        $cachorro = new Cachorro($idCachorro, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente);
        $cachorro->alterarCachorro($cachorro);
    }
    public function deletarCachorro($idCachorro)
    {
        $cachorro = new Cachorro(null, null, null, null, null, null, null, null, null);
        $cachorro->deletarCachorro($idCachorro);
    }
}
