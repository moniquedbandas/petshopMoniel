<<<<<<< HEAD
<?php
    class UsuarioController {
        
        public function autenticarUsuario($email, $senha)
        {
            include_once '../model/Usuario.php';
            include_once '../DAO/UsuarioDAO.php';
            $dao = new UsuarioDAO();
            $resultado = $dao->autenticarUsuario($email, $senha);
            return $resultado;
        }
        
        
    }
    
    
=======
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
>>>>>>> c106afb0ead034e203a2d3bb17182bae117f2ed0
