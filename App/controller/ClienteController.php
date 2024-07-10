<?php
include_once '../../model/Cliente.php';
class ClienteController
{
    public static function cadastrarCliente($nomeCliente, $telefone, $endereco, $cpf, $email)
    {
        // include_once '../model/Cliente.php';
        $cliente = new Cliente(null, $nomeCliente, $telefone, $endereco, $cpf, $email);
        $cliente->cadastrarCliente($cliente);
    }
    public static function listarCliente()
    {
        // include_once '../model/Cliente.php';
        $clienteDAO = new Cliente(null, null, null, null, null, null);
        return $clienteDAO->listarCliente();
    }
    public static function resgataPorID($idCliente)
    {
        // include '../model/Cliente.php';
        $model = new Cliente(null, null, null, null, null, null);
        return $model->resgataPorID($idCliente);
    }
    public function alterarCliente($idCliente, $nomeCliente, $telefone, $endereco, $cpf, $email)
    {
        // include '../model/Cliente.php';
        $cliente = new Cliente($idCliente, $nomeCliente, $telefone, $endereco, $cpf, $email);
        $cliente->alterarCliente($cliente);
    }
    public function excluirCliente($idCliente)
    {
        // include '../model/Cliente.php';
        $cliente = new Cliente(null, null, null, null, null, null);
        $cliente->excluirCliente($idCliente);
    }
}
