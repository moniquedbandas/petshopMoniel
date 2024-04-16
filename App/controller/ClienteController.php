<?php
class ClienteController
{
    public function cadastrarCliente($nomeCliente, $telefone, $endereco, $cpf, $email, $senha)
    {
        include_once '../model/Cliente.php';
        $cliente = new Cliente(null, $nomeCliente, $telefone, $endereco, $cpf, $email, $senha);
        $cliente->cadastrarCliente($cliente);
    }
    public function autenticarCliente($email, $senha)
    {
        include_once '../model/Cliente.php';
        include_once '../DAO/ClienteDAO.php';
        $dao = new ClienteDAO();
        $resultado = $dao->autenticarCliente($email, $senha);
        return $resultado;
    }
    public function listarCliente()
    {
    }
    public function alterarCliente(Cliente $cliente)
    {
    }
    public function excluirCliente($idCliente)
    {
    }
}
