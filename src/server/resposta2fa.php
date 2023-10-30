<?php
session_start();

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dbConnection = new ConnectionDb();
    $mysqli = $dbConnection->getCon();

    $cpf = $_SESSION["cpf"];
    $pergunta = $_SESSION["pergunta"];
    $resposta = $_POST["resposta"];
    echo $cpf;

    function fetchUserInfo($mysqli, $cpf)
    {
        $query = "SELECT cpf, nome, sexo, data_nascimento, nome_materno, telefone_celular, telefone_fixo, login 
                  FROM telecall.cliente_comum 
                  WHERE cpf = '$cpf'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }

    
    //Verifica se a Resposta esta correta, se sim efetuará o login, assim retonando a pagina principal com todas as informações do usuario logado
    function verificarResposta($resposta, $pergunta, $cpf, $mysqli)
    {
        if ($pergunta == "cep") {
            $query = "SELECT cpf FROM telecall.endereco WHERE cep = '$resposta' AND cpf = '$cpf'";
        } else {
            $query = "SELECT cpf FROM telecall.cliente_comum WHERE $pergunta = '$resposta' AND cpf = '$cpf'";
        }
        $result = $mysqli->execute_query($query);
        if ($result->num_rows == 1) {
            return fetchUserInfo($mysqli, $cpf);
        } else {
            $_SESSION["role"] = "erro";
            header("Location: ../error/errorRespostaIncorreta.php");
        }
    }


    $userInfo = verificarResposta($resposta, $pergunta, $cpf, $mysqli);
    if ($userInfo) {
        $_SESSION["cpf"] = $userInfo["cpf"];
        $_SESSION["nome"] = $userInfo["nome"];
        $_SESSION["sexo"] = $userInfo["sexo"];
        $_SESSION["data_nascimento"] = $userInfo["data_nascimento"];
        $_SESSION["nome_materno"] = $userInfo["nome_materno"];
        $_SESSION["telefone_celular"] = $userInfo["telefone_celular"];
        $_SESSION["telefone_fixo"] = $userInfo["telefone_fixo"];
        $_SESSION["login"] = $userInfo["login"];

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
        $logMessage = "logou no sistema como cliente comum.";
        $logQuery = "INSERT INTO `telecall`.`log` (`data_hora`, `log_mensage`, `cpf`, `nome`) 
                         VALUES ('$data', '$logMessage', '$cpf', '$nome')";
        $mysqli->execute_query($logQuery);
        $mysqli->commit();
        $mysqli->close();
        $_SESSION["role"] = "comum";
        header("Location: ../paginaCliente.php");
    } else {
        $data = date('Y-m-d H:i:s');
        $logMessage = "o cliente do CPF $cpf tentou responder a pergunta sobre $pergunta e errou.";
        $logQuery = "INSERT INTO `telecall`.`log` (`data_hora`, `log_mensage`, `cpf`, `nome`) 
                         VALUES ('$data', '$logMessage', '$cpf', '')";
        $mysqli->execute_query($logQuery);
        $mysqli->commit();
        $mysqli->close();
        $_SESSION["role"] = "erro";
        header("Location: ../error/errorRespostaIncorreta.php");
    }
}
