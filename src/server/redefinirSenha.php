<?php

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $entrada = $_POST["entrada"];

    $Random = rand(1, 3);

    $verificarUser = "SELECT cpf FROM telecall.cliente_comum where cpf = '$entrada' or login = '$entrada'";
    if ($result = $mysqli->execute_query($verificarUser)) {
        if ($result->num_rows == 1) {
            setcookie("cpf", $result->fetch_column());
            switch ($Random) {
                case 1:
                    header("Location: ../2fa/pergunta2fa1Senha.php");
                    setcookie("pergunta", "cep");
                    break;
                case 2:
                    header("Location: ../2fa/pergunta2fa2Senha.php");
                    setcookie("pergunta", "data_nascimento");
                    break;
                case 3:
                    header("Location: ../2fa/pergunta2fa3Senha.php");
                    setcookie("pergunta", "nome_materno");
                    break;
                default:
                    break;
            }
        } else {
            header("Location: ../error/errorUserUndefined.html");
        }
    }
}
