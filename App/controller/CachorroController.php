<?php
include_once '../../model/Cachorro.php';
class CachorroController
{
    public static function cadastrarCachorro($nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente)
    {
       // include_once '../../model/Cachorro.php';
        $cachorro = new Cachorro(null, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente);
        $cachorro->cadastrarCachorro($cachorro);
    }

    public static function listarCachorro()
    {
       // include_once '../../model/Cachorro.php';
        $cachorroDAO = new Cachorro(null, null, null, null, null, null, null, null, null);
        return $cachorroDAO->listarCachorro();
    }
    public static function alterarCachorro($idCachorro, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente)
    {
       // include_once '../model/Cachorro.php';
        $cachorro = new Cachorro($idCachorro, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente);
        $cachorro->alterarCachorro($cachorro);
    }
    public function excluirCachorro($idCachorro)
    {
        // include '../model/Cachorro.php';
        $cachorro = new Cachorro(null, null, null, null, null, null, null, null, null);
        $cachorro->excluirCachorro($idCachorro);
    }
    //teste
}
