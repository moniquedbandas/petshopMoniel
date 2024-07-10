<?php
include_once '../../model/Gato.php';
class GatoController
{
    public static function cadastrarGato($nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente)
    {
        // include_once '../../model/Gato.php';
        $gato = new Gato(null, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente);
        $gato->cadastrarGato($gato);
    }

    public static function listarGato()
    {
        // include_once '../../model/Gato.php';
        $gatoDAO = new Gato(null, null, null, null, null, null, null, null, null);
        return $gatoDAO->listarGato();
    }
    public static function alterarGato($idGato, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente)
    {
        //   include_once '../../model/Gato.php';
        $gato = new Gato($idGato, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente);
        $gato = alterarGato($gato);
    }
    public function deletarGato($idGato)
    {
        // include_once '../../model/Gato.php';
        $gato = new Gato(null, null, null, null, null, null, null, null, null);
        $gato->deletarGato($idGato);
    }
}
