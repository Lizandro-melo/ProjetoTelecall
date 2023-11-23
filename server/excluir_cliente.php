<?php
session_start();

// Script de excluir um cliente, assim como o de consultar todos os clientes, eu também verifico quem fez a requisição
if ($_SESSION["role"] != "master") {
    return;
}
require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpfClienteComum = $_POST['cpfClienteComum'];
    $nomeCliente = $_POST['nomeCliente'];
    $cpfMaster = $_SESSION["cpf"];
    $nome = $_SESSION["nome"];
    $data = date('Y-m-d H:i:s');

    //Assim que o metodo for disparado, enviará um log para o banco de dados como forma de registrar;
    $logMessage = "$nomeCliente do $cpfClienteComum foi excluido do nosso banco de dados pelo master $nome do CPF $cpfMaster";
    $logQuery = "INSERT INTO `telecall`.`log` (`data_hora`, `log_mensage`, `cpf`) 
                     VALUES ('$data', '$logMessage', '$cpfMaster')";

    $db = new ConnectionDb();
    $con = $db->getCon();

    $query1 = "DELETE FROM telecall.log WHERE cpf = '$cpfClienteComum'";
    $query2 = "DELETE FROM telecall.endereco WHERE cpf = '$cpfClienteComum'";
    $query3 = "DELETE FROM telecall.cliente_master WHERE cpf = '$cpfClienteComum'";
    $query4 = "DELETE FROM telecall.cliente_comum WHERE cpf = '$cpfClienteComum'";

    $con->execute_query($query1);
    $con->execute_query($query2);
    $con->execute_query($query3);
    $con->execute_query($query4);
    if ($con->execute_query($query1)) {
        if ($con->execute_query($query2)) {
            if ($con->execute_query($query3)) {
                if ($con->execute_query($query4)) {
                    echo "Client deleted successfully.";
                }
            }
        }
    }
    
    $con->execute_query($logQuery);
    $con->commit();
    $con->close();
}
