<?php
include_once  '../../model/Usuario.php';
include_once  '../../DAO/UsuarioDAO.php';
class UsuarioController
{
    public static function autenticarUsuario($email, $senha)
    {
        $autenticaDao = new UsuarioDAO();
        $resultado = $autenticaDao->autenticarUsuario($email, $senha);
        return $resultado;
    }
}
