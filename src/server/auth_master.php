<?php

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $Random = rand(1, 3);

    $verificarLogin = "SELECT login FROM telecall.cliente_master where login = '$login'";
    if ($result = $mysqli->execute_query($verificarLogin)) {
        if ($result->num_rows == 1) {
            $verificarSenha = "SELECT cpf FROM telecall.cliente_master WHERE senha = '$senha'";
            if ($result = $mysqli->execute_query($verificarSenha)) {
                if ($result->num_rows == 1) {
                    header("Location: ../paginaMaster.php");
                }else{
                    header("Location:../error/errorAuth.html");
                }
            }
        } else {

            header("Location:../error/errorAuth.html");
        }
    }
}
