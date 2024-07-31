<?php
include_once '../../DAO/ClienteDAO.php';
class Cliente
{
    protected $idCliente;
    protected $nomeCliente;
    protected $telefone;
    protected $endereco;
    protected $cpf;
    protected $email;
    protected $senha;

    public function __construct($idCliente = null, $nomeCliente = null, $telefone = null, $endereco = null, $cpf = null, $email = null)
    {

        $this->idCliente = $idCliente;
        $this->nomeCliente = $nomeCliente;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($value)
    {
        $this->idCliente = $value;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente($value)
    {
        $this->nomeCliente = $value;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($value)
    {
        $this->telefone = $value;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($value)
    {
        $this->endereco = $value;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($value)
    {
        $this->cpf = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function cadastrarCliente(Cliente $clienteDAO)
    {
        $clienteDAO = new ClienteDAO();
        $clienteDAO->cadastrarCliente($this);
    }
    public function listarCliente()
    {
        $dao = new ClienteDAO();
        return $dao->listarCliente();
    }
    public function resgataPorID($idCliente)
    {
        $model = new ClienteDAO(null);
        return $model->resgataPorID($idCliente);
    }
    public function alterarCliente(Cliente $cliente)
    {
        $clienteDAO = new ClienteDAO();
        $clienteDAO->alterarCliente($cliente);
    }
    public function excluirCliente($idCliente)
    {
        $cliente = new ClienteDAO();
        $cliente->excluirCliente($idCliente);
    }
}
