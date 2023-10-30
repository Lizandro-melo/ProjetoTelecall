<?php
session_start();

// Esse script é o responsavel por buscar todos os usuarios do banco de dados;
// Primeiro de tudo faço uma verificação para saber se quem fez esse pedido foi um usuario master;
if ($_SESSION["role"] != "comum") {
    header("location: index.php");
}
require_once "./db/ConnectionDb.class.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cpf = $_SESSION["cpf"];

    $db = new ConnectionDb();
    $con = $db->getCon();
    
    $query = "SELECT * FROM telecall.log WHERE cpf = '$cpf'";
    $exec = $con->execute_query($query);    
    $result = $exec;
    $logs = [];
    while ($row = $result->fetch_assoc()) {
        $logs[] = $row;
    }
    
    echo json_encode($logs);
    
    $con->close();
}
