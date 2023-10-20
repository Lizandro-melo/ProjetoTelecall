<?php

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $senha = $_POST["senha"];
    $comSenha = $_POST["comSenha"];
    $cpf = $_COOKIE["cpf"];
    
    // VERIFICAR SE AS DUAS SENHAS CONFEREM
    if($senha != $comSenha){
        header("Location: ../error/errorSenhasDiferentes.html");
        return;
    }

    $redefinir = "UPDATE `telecall`.`cliente_comum` SET `senha` = '$senha' WHERE (`cpf` = '$cpf')";
    $mysqli->execute_query($redefinir);
    $mysqli->commit();
    header("Location: ../redefinirSenhaSucesso.php");
    $mysqli->close();
}
