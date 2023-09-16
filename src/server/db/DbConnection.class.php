<?php

class DbConnection
{

    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "415263";
    public string $port = "3306";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername:$this->port;dbname=telecall", $this->username, $this->password);
        } catch (Exception $e) {
            echo "Connected Failed" . $e;
        }
    }

    public function __getCliente($login, $senha)
    {
        $query = "SELECT * FROM cliente WHERE login = '$login' AND senha = '$senha'";
        $exec = $this->conn->query($query);
        return $exec;
    }

    public function __getCoon()
    {
        return $this->conn;
    }
}
