<?php

require_once "./db/ConnectionDb.class.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $senha = $_POST["senha"];
    $comSenha = $_POST["comSenha"];
    $cpf = $_SESSION["cpf"];
    
    // VERIFICAR SE AS DUAS SENHAS CONFEREM
    if($senha != $comSenha){
        $_SESSION["role"] = "erro";
        header("Location: ../error/errorSenhasDiferentes.html");
        return;
    }

    $redefinir = "UPDATE `telecall`.`cliente_comum` SET `senha` = '$senha' WHERE (`cpf` = '$cpf')";
    $mysqli->execute_query($redefinir);
    $mysqli->commit();
    session_destroy();
    header("Location: ../redefinirSenhaSucesso.php");
    $mysqli->close();
}
