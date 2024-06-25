<?php
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

    // public function setIdUsuario($value) {
    // 	$this->idUsuario = $value;
    // }

    public function getEmail()
    {
        return $this->email;
    }

    // public function setEmail($value) {
    // 	$this->email = $value;
    // }

    public function getSenha()
    {
        return $this->senha;
    }

    // public function setSenha($value) {
    // 	$this->senha = $value;
    // }
    public function autenticarUsuario($email, $senha)
    {
        include_once "../DAO/UsuarioDAO.php";
        $usuarioDAO = new UsuarioDAO();
        $autenticado = $usuarioDAO->autenticarUsuario($email, $senha);
        return $autenticado;
    }
}
