<?php

class DbConnection {

    public string $servername = "localhost";
    public string $username = "Telecall";
    public string $password = "Telecall415263";

    public function testeConnection()
    {
        try{
            $conn = new PDO("mysql:host=$this->servername:3308;dbname=telecall", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return "Connected successfully";
        } catch(Error){
            return "Connected Failed";
        }
    }

}
?>