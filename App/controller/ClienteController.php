<?php
class ClienteController
{
    public static function cadastrarCliente($nomeCliente, $telefone, $endereco, $cpf, $email, $senha)
    {
        include_once '../model/Cliente.php';
        $cliente = new Cliente(null, $nomeCliente, $telefone, $endereco, $cpf, $email, $senha);
        $cliente->cadastrarCliente($cliente);
    }
    public static function autenticarCliente($email, $senha)
    {
        include_once '../model/Cliente.php';
        include_once '../DAO/ClienteDAO.php';
        $dao = new ClienteDAO();
        $resultado = $dao->autenticarCliente($email, $senha);
        return $resultado;
    }
    public static function listarCliente()
    {
        include_once '../model/Cliente.php';
        $clienteDAO = new Cliente(null, null, null, null, null, null, null);
        return $clienteDAO->listarCliente();
    }
    public function alterarCliente(Cliente $cliente)
    {
    }
    public function excluirCliente($idCliente)
    {
    }
}
