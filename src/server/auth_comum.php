<?php
session_start();

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $Random = rand(1, 3);

    function verificarLogin($mysqli, $login)
    {
        $query = "SELECT login FROM telecall.cliente_comum where login = '$login'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }

    function verificarSenha($mysqli, $login, $senha)
    {
        $loginReturn = verificarLogin($mysqli, $login)["login"];
        $query = "SELECT cpf FROM telecall.cliente_comum WHERE senha = '$senha' and login = '$loginReturn'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }

    if (verificarSenha($mysqli, $login, $senha) === false) {
        $_SESSION["role"] = "erro";
        header("Location:../error/errorAuth.php");
    } else {
        $_SESSION["cpf"] = verificarSenha($mysqli, $login, $senha)["cpf"];
        switch ($Random) {
            case 1:
                $_SESSION['pergunta'] = "cep";
                header("Location: ../2fa/pergunta2fa1.php");
                break;
            case 2:
                $_SESSION['pergunta'] = "data_nascimento";
                header("Location: ../2fa/pergunta2fa2.php");
                break;
            case 3:
                $_SESSION['pergunta'] = "nome_materno";
                header("Location: ../2fa/pergunta2fa3.php");
                break;
            default:
                break;
        }
    }
}
