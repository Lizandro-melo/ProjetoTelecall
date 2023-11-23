<?php

require_once "./db/ConnectionDb.class.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $cpf = $_SESSION["cpf"];
    $pergunta = $_SESSION['perguntaBanco'];
    $resposta = $_POST["resposta"];


    //Função de verificar responsta do pedido de redefinição de senha
    function verificarResposta($resposta, $pergunta, $cpf, $mysqli)
    {
        if ($pergunta == "cep") {
            $query = "SELECT cpf FROM telecall.endereco WHERE cep = '$resposta' AND cpf = '$cpf'";
            $queryNome = "SELECT nome FROM telecall.cliente_comum WHERE cpf = '$cpf'";
        } else {
            $query = "SELECT cpf, nome FROM telecall.cliente_comum WHERE $pergunta = '$resposta' AND cpf = '$cpf'";
        }

        $result = $mysqli->execute_query($query);
        if ($result->num_rows === 1) {
            if ($pergunta == "cep") {
                $resultNome = $mysqli->execute_query($queryNome);
                $nome = $resultNome->fetch_assoc()["nome"];
            } else {
                $nome = $result->fetch_assoc()["nome"];
            }
            $data = date('Y-m-d H:i:s');
            $logMessage = "Solicitou a redefinição da senha";
            $logQuery = "INSERT INTO `telecall`.`log` (`data_hora`, `log_mensage`, `cpf`) 
                         VALUES ('$data', '$logMessage', '$cpf')";
            $mysqli->execute_query($logQuery);
            $mysqli->commit();
            $mysqli->close();
            $_SESSION["role"] = "redefinirSenha";
            header("Location: ../redefinirSenha2.php");
        } else {
            $data = date('Y-m-d H:i:s');
            $logMessage = "o cliente do CPF $cpf tentou responder a pergunta sobre $pergunta e errou.";
            $logQuery = "INSERT INTO `telecall`.`log` (`data_hora`, `log_mensage`, `cpf`) 
                         VALUES ('$data', '$logMessage', '$cpf')";
            $mysqli->execute_query($logQuery);
            $mysqli->commit();
            $mysqli->close();
            $_SESSION["role"] = "erro";
            header("Location: ../error/errorRespostaIncorreta.php");
        }
    }

    verificarResposta($resposta, $pergunta, $cpf, $mysqli);
}
