<?php

class UsuarioDAO {

    public function autenticarCliente($email, $senha)
    {
        $usuarioDAO = new UsuarioDAO();
        $autenticado = $usuarioDAO->autenticarUsuario($email, $senha);
        return $autenticado;
    }

}