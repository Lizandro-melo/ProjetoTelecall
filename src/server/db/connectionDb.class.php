<?php

class DbConnection {

    private string $servername = "localhost";
    private string $username = "Telecall";
    private string $password = "Telecall415263";
    private string $port = "3306";
    private PDO $conn;
    
    public function __construct(){
        try{
            $this -> conn = new PDO("mysql:host=$this->servername:$this->port;dbname=telecall", $this -> username, $this -> password);
            return "Connected successfully";
        } catch(Error){
            return "Connected Failed";
        }
    }

    public function setCliente(){
        //InserindoDados
        if(isset($_POST['nome'])){
            $sql = $this -> conn -> prepare("INSERT INTO telecall VALUES(null,?,?,?,?,?,?,?,?,?,?)");
            $sql -> execute(array($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['data'],$_POST['telefoneCelular'],$_POST['telefoneFixo'],$_POST['nomeMaterno'],$_POST['endereco'],$_POST['login'],$_POST['senha']));
        }
    }

}
?>