<?php
class CachorroController
{
    public function cadastrarCachorro(Cachorro $cachorro)
    {
    }

    public static function listarCachorro()
    {
        include_once '../model/Cachorro.php';
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
