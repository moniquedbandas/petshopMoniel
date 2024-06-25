<?php
class Cliente
{
    protected $idCliente;
    protected $nomeCliente;
    protected $telefone;
    protected $endereco;
    protected $cpf;
    protected $email;
    protected $senha;
    // retirei senha pq o unico que logará sera o funcionario..
    public function __construct($idCliente, $nomeCliente, $telefone, $endereco, $cpf, $email)
    {

        $this->idCliente = $idCliente;
        $this->nomeCliente = $nomeCliente;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
        $this->email = $email;
        // $this->senha = $senha;
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

    // public function getSenha()
    // {
    //     return $this->senha;
    // }

    // public function setSenha($value)
    // {
    //     $this->senha = $value;
    // }

    public function cadastrarCliente(Cliente $cliente)
    {
        include_once '../DAO/ClienteDAO.php';
        $clienteDAO = new ClienteDAO();
        $clienteDAO->cadastrarCliente($this);
    }
    // public function autenticarCliente($email, $senha)
    // {
    //     $clienteDAO = new ClienteDAO();
    //     $autenticado = $clienteDAO->autenticarCliente($email, $senha);
    //     return $autenticado;
    // }
    public function listarCliente()
    {
        include_once '../DAO/ClienteDAO.php';
        $dao = new ClienteDAO();
        return $dao->listarCliente($cpf);
    }
    public function resgataPorID($idCliente)
    {
        include_once '../DAO/ClienteDAO.php';
        $model = new ClienteDAO(null);
        return $model->resgataPorID($idCliente);
    }
    public function alterarCliente(Cliente $cliente)
    {
        include_once '../DAO/ClienteDAO.php';
        $clienteDAO = new ClienteDAO();
        $clienteDAO->alterarCliente($cliente);
    }
    public function excluirCliente($idCliente)
    {
        include_once '../DAO/ClienteDAO.php';
        $cliente = new ClienteDAO();
        $cliente->excluirCliente($idCliente);
    }
}
