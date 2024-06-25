<?php
class UsuarioController
{

    public static function autenticarUsuario($email, $senha)
    {
        include_once '../model/Usuario.php';
        include_once '../dao/UsuarioDAO.php';
        $dao = new UsuarioDAO();
        $resultado = $dao->autenticarUsuario($email, $senha);
        return $resultado;
    }
}
