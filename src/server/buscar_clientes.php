<?php
session_start();
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
