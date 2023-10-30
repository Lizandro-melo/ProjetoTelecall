<?php
session_start();

// Esse script é o responsavel por buscar todos os usuarios do banco de dados;
// Primeiro de tudo faço uma verificação para saber se quem fez esse pedido foi um usuario master;
if ($_SESSION["role"] != "master") {
    header("location: index.php");
}
require_once "./db/ConnectionDb.class.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $db = new ConnectionDb();
    $con = $db->getCon();
    
    $query = "SELECT * FROM telecall.cliente_comum";
    $exec = $con->execute_query($query);    
    $result = $exec;
    $clients = [];
    while ($row = $result->fetch_assoc()) {
        $clients[] = $row;
    }
    
    echo json_encode($clients);
    
    $con->close();
}
