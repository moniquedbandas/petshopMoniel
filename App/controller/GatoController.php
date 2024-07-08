<?php
class GatoController
{
    public function cadastrarGato(Gato $gato)
    {
    }

    public static function listarGato()
    {
        include_once '../model/Gato.php';
        $gatoDAO = new Gato(null, null, null, null, null, null, null, null, null);
        return $gatoDAO->listarGato();
    }
    public static function alterarGato($idGato)
    {
    }
    public function excluirGato($idGato)
    {
    }
}
