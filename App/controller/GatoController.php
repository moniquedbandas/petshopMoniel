<?php
class GatoController
{
    public static function cadastrarGato($nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente)
    {
        include_once '../../model/Gato.php';
        $gato = new Gato(null, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente);
        $gato->cadastrarGato($gato);
    }

    public static function listarGato()
    {
        include_once '../../model/Gato.php';
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
