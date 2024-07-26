<?php
include_once "../../DAO/UsuarioDAO.php";
class Usuario
{
    protected $idUsuario;
    protected $email;
    protected $senha;

    public function __construct($idUsuario, $email, $senha)
    {
        $this->idUsuario = $idUsuario;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $this->senha;
    }

    public function autenticarUsuario($email, $senha)
    {
        $usuarioDAO = new UsuarioDAO();
        $autenticado = $usuarioDAO->autenticarUsuario($email, $senha);
        return $autenticado;
    }
}
