<?php
class ClienteController
{
    public function cadastrarCliente($nomeCliente, $telefone, $endereco, $cpf, $email, $senha)
    {
        include_once '../model/Cliente.php';
        $cliente = new Cliente(null, $nomeCliente, $telefone, $endereco, $cpf, $email, $senha);
        $cliente->cadastrarCliente($cliente);
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
