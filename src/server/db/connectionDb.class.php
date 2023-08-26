<?php

class DbConnection {

    private string $servername = "localhost";
    private string $username = "Telecall";
    private string $password = "Telecall415263";
    public string $port = "3308";
    private $conn;
    
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=$this->servername:$this->port;dbname=telecall", $this->username, $this->password);
        } catch(Exception $e){
            echo "Connected Failed".$e;
        }
    }

    public function __autentication( string $login, string $pass ){
        $query = "SELECT login, senha FROM cliente WHERE login='$login' AND senha='$pass'";
        $exec = $this->conn->query($query);
        $result = $exec->fetchColumn();
        if($result == $login){
            header("location: http://localhost/projetotelecall/src/paginaPrincipal.html");
            return;
        }else{
            return "error";
        }
    }

    public function __getCliente($login, $senha){
        $query = "SELECT * FROM cliente WHERE login = '$login' AND senha = '$senha'";
        $exec = $this->conn->query($query);
        return $exec;
    }

}
?>