<?php
session_start();
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
    $logMessage = "$nomeCliente do $cpfClienteComum foi excluido do nosso banco de dados pelo master $nome do CPF $cpfMaster";
    $logQuery = "INSERT INTO `telecall`.`log` (`data_hora`, `log_mensage`, `cpf`, `nome`) 
                     VALUES ('$data', '$logMessage', '$cpfMaster', '$nome')";

    $db = new ConnectionDb();
    $con = $db->getCon();

    $query = "DELETE FROM telecall.cliente_comum WHERE cpf = '$cpfClienteComum'";

    if ($con->execute_query($query)) {
        echo "Client deleted successfully.";
    } else {
        echo "Failed to delete client.";
    }
    $con->execute_query($logQuery);
    $con->commit();
    $con->close();
}
