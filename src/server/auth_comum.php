<?php

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $Random = rand(1, 3);

    $verificarLogin = "SELECT login FROM telecall.cliente_comum where login = '$login'";
    if ($result = $mysqli->execute_query($verificarLogin)) {
        if ($result->num_rows == 1) {
            $verificarSenha = "SELECT cpf FROM telecall.cliente_comum WHERE senha = '$senha'";
            if ($result = $mysqli->execute_query($verificarSenha)) {
                if ($result->num_rows == 1) {
                    setcookie("cpf", $result->fetch_column());
                    switch ($Random) {
                        case 1:
                            header("Location: ../2fa/pergunta2fa1.php");
                            setcookie("pergunta", "cep");
                            break;
                        case 2:
                            header("Location: ../2fa/pergunta2fa2.php");
                            setcookie("pergunta", "data_nascimento");
                            break;
                        case 3:
                            header("Location: ../2fa/pergunta2fa3.php");
                            setcookie("pergunta", "nome_materno");
                            break;
                        default:
                            break;
                    }
                }else{
                    header("Location:../error/errorAuth.html");
                }
            }
        } else {

            header("Location:../error/errorAuth.html");
        }
    }
}
