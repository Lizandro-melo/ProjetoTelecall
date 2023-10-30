<?php

require_once "./db/ConnectionDb.class.php";
session_start();


//Codigo faz quase a mesma coisa que o de autenticar Comum, a diferença é que ele rerna para uma pagina de pergunta diferente
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $entrada = $_POST["entrada"];

    $Random = rand(1, 3);

    function verificarCliente($mysqli, $entrada)
    {
        $query = "SELECT cpf FROM telecall.cliente_comum where cpf = '$entrada' or login = '$entrada'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }
    if (verificarCliente($mysqli, $entrada) === false) {
        $_SESSION["role"] = "erro";
        header("Location: ../error/errorUserUndefined.php");
    } else {
        $_SESSION["cpf"] = verificarCliente($mysqli, $entrada)["cpf"];
        switch ($Random) {
            case 1:
                $_SESSION['pergunta'] = "cep";
                header("Location:../2fa/pergunta2fa1Senha.php");
                break;
            case 2:
                $_SESSION['pergunta'] = "data_nascimento";
                header("Location:../2fa/pergunta2fa2Senha.php");
                break;
            case 3:
                $_SESSION['pergunta'] = "nome_materno";
                header("Location:../2fa/pergunta2fa3Senha.php");
                break;
            default:
                break;
        }
    }
}
