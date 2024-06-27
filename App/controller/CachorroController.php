<?php

class CachorroController
{
    public static function cadastrarCachorro($nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente)
    {
        include_once '../../model/Cachorro.php';
        $cachorro = new Cachorro(null, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $porte, $idCliente);
        $cachorro->cadastrarCachorro($cachorro);
    }

    public static function listarCachorro()
    {
        include_once '../../model/Cachorro.php';
        $cachorroDAO = new Cachorro(null, null, null, null, null, null, null, null, null);
        return $cachorroDAO->listarCachorro();
    }
    public static function alterarCachorro($idCachorro)
    {
    }
    public function excluirCachorro($idCachorro)
    {
    }
}
