<?php
class UsuarioController

{
    public static function autenticarUsuario($email, $senha)
    {
        include_once  '../../model/Usuario.php';
        include_once  '../../DAO/UsuarioDAO.php';
        $autenticaDao = new UsuarioDAO();
        $resultado = $autenticaDao->autenticarUsuario($email, $senha);
        return $resultado;
    }
}
