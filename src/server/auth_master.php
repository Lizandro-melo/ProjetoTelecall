<?php
session_start();

require_once "./db/ConnectionDb.class.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Função responsavel por verificar e pegar todas as informações do usuario assim que efetuar o login
    function fetchUserInfo($mysqli, $cpf)
    {
        $query = "SELECT cpf, nome, sexo, data_nascimento, nome_materno, telefone_celular, telefone_fixo, login 
                  FROM telecall.cliente_comum 
                  WHERE cpf = '$cpf'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }

    function verificarLogin($mysqli, $login)
    {
        $query = "SELECT login FROM telecall.cliente_master where login = '$login'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }

    //Diferente da de usuario comum, temos essa função que retorna o cpf do usuario
    function verificarSenha($mysqli, $login, $senha)
    {
        $loginReturn = verificarLogin($mysqli, $login)["login"];
        $query = "SELECT cpf FROM telecall.cliente_master WHERE senha = '$senha' and login = '$loginReturn'";
        $result = $mysqli->execute_query($query);
        return $result->fetch_assoc()["cpf"];
    }

    $cpf = verificarSenha($mysqli, $login, $senha);

    $userInfo = fetchUserInfo($mysqli, $cpf);

    //ao efetuar o login usaremos Session para distribuir as informações pessoais do usuario;
    if ($userInfo) {
        $_SESSION["cpf"] = $userInfo["cpf"];
        $_SESSION["nome"] = $userInfo["nome"];
        $_SESSION["sexo"] = $userInfo["sexo"];
        $_SESSION["data_nascimento"] = $userInfo["data_nascimento"];
        $_SESSION["nome_materno"] = $userInfo["nome_materno"];
        $_SESSION["telefone_celular"] = $userInfo["telefone_celular"];
        $_SESSION["telefone_fixo"] = $userInfo["telefone_fixo"];
        $_SESSION["login"] = verificarLogin($mysqli, $login)["login"];

        $enderecoQuery = "SELECT cep, lagradouro, bairro, localidade, uf, complemento 
                              FROM telecall.endereco 
                              WHERE cpf = '$cpf'";
        $enderecoResult = $mysqli->execute_query($enderecoQuery);
        $enderecoData = $enderecoResult->fetch_assoc();

        $_SESSION["cep"] = $enderecoData["cep"];
        $_SESSION["lagradouro"] = $enderecoData["lagradouro"];
        $_SESSION["bairro"] = $enderecoData["bairro"];
        $_SESSION["localidade"] = $enderecoData["localidade"];
        $_SESSION["uf"] = $enderecoData["uf"];
        $_SESSION["complemento"] = $enderecoData["complemento"];

        $data = date('Y-m-d H:i:s');
        $nome = $userInfo['nome'];
        $logMessage = "logou no sistema como cliente master.";
        $logQuery = "INSERT INTO `telecall`.`log` (`data_hora`, `log_mensage`, `cpf`, `nome`) 
                         VALUES ('$data', '$logMessage', '$cpf', '$nome')";
        $mysqli->execute_query($logQuery);
        $mysqli->commit();
        $mysqli->close();
        $_SESSION["role"] = "master";
        header("Location: ../paginaMaster.php");
    } else {
        $_SESSION["role"] = "erro";
        header("Location: ../error/errorAuth.php");
    }
}
