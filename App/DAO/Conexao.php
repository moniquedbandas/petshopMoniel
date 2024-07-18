<?php

class Conexao
{
    private $host = 'localhost:3306';
    private $db_name = 'petshopmoniel';
    private $username = 'root';
<<<<<<< HEAD
    //private $password = 'Moni@1958';
    private $password = ''; //pc senac
    // private $password = 'Moni@1958';
=======
    private $password = 'Moni@1958';
    // private $password = ''; //pc senac
>>>>>>> fe392ba7d1532461dc531563eb35e1064bbbef34
    public $conn;

    public function fazConexao()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
            echo phpinfo();
        }
        return $this->conn;
    }
}
