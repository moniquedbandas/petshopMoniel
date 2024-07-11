<?php
include_once '../../model/Gato.php';
class GatoController
{
    public static function cadastrarGato($nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente)
    {
        $gato = new Gato(null, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente);
        $gato->cadastrarGato($gato);
    }
    public static function listarGato()
    {
        $gatoDAO = new Gato(null, null, null, null, null, null, null, null, null);
        return $gatoDAO->listarGato();
    }
    public static function resgataPorID($idGato)
    {
        $model = new Gato(null, null, null, null, null, null, null, null, null);
        return $model->resgataPorID($idGato);
    }
    public function alterarGato($idGato, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente)
    {
        $gato = new Gato($idGato, $nomePet, $idade, $peso, $sexo, $raca, $castrado, $temperamento, $idCliente);
        $gato->alterarGato($gato);
    }
    public function deletarGato($idGato)
    {
        $gato = new Gato(null, null, null, null, null, null, null, null, null);
        $gato->deletarGato($idGato);
    }
}
