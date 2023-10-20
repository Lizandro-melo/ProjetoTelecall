<?php

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $cpf = $_COOKIE["cpf"];
    $pergunta = $_COOKIE["pergunta"];
    $resposta = $_POST["resposta"];

    if ($pergunta == "cep") {
        $verificarCep = "SELECT cpf FROM telecall.endereco where $pergunta = '$resposta'";
        $result = $mysqli->execute_query($verificarCep);
        if ($result->num_rows == 1) {
            $cpf = $result->fetch_column();
            $verificarUser = "SELECT cpf FROM telecall.cliente_comum where cpf = '$cpf'";
            $result = $mysqli->execute_query($verificarUser);
            while ($row = $result->fetch_row()) {
                setcookie("cpf", $row[0]);
            }
            header("Location: ../redefinirSenha2.php");
        } else {
            header("Location: ../error/errorRespostaIncorreta.html");
        }
    } else {
        $verificarUser = "SELECT cpf FROM telecall.cliente_comum where $pergunta = '$resposta'";
        $result = $mysqli->execute_query($verificarUser);
        if ($result->num_rows == 1) {
            while ($row = $result->fetch_row()) {
                setcookie("cpf", $row[0]);
            }
            header("Location: ../redefinirSenha2.php");
        } else {
            header("Location:../error/errorRespostaIncorreta.html");
        }
    }
}
