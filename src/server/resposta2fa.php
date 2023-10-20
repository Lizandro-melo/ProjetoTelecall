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
            $verificarUser = "SELECT cpf, nome, sexo, data_nascimento, nome_materno, telefone_celular, telefone_fixo FROM telecall.cliente_comum where cpf = '$cpf'";
            $result = $mysqli->execute_query($verificarUser);
            while ($row = $result->fetch_row()) {
                setcookie("cpf", $row[0]);
                setcookie("nome", $row[1]);
                setcookie("sexo", $row[2]);
                setcookie("dataNascimento", $row[3]);
                setcookie("nomeMaterno", $row[4]);
                setcookie("telefoneCelular", $row[5]);
                setcookie("telefoneFixo", $row[6]);
            }
            $puxarEndereco = "SELECT cep, lagradouro, bairro, localidade, uf, complemento FROM telecall.endereco where cpf = '$cpf'";
            $result = $mysqli->execute_query($puxarEndereco);
            while ($row = $result->fetch_row()) {
                setcookie("cep", $row[0]);
                setcookie("rua", $row[1]);
                setcookie("bairro", $row[2]);
                setcookie("localidade", $row[3]);
                setcookie("uf", $row[4]);
                setcookie("complemento", $row[5]);
            }
            header("Location: ../paginaCliente.php");
        } else {
            header("Location: ../error/errorRespostaIncorreta.html");
        }
    } else {
        $verificarUser = "SELECT cpf, nome, sexo, data_nascimento, nome_materno, telefone_celular, telefone_fixo FROM telecall.cliente_comum where $pergunta = '$resposta'";
        $result = $mysqli->execute_query($verificarUser);
        if ($result->num_rows == 1) {
            while ($row = $result->fetch_row()) {
                setcookie("cpf", $row[0]);
                setcookie("nome", $row[1]);
                setcookie("sexo", $row[2]);
                setcookie("dataNascimento", $row[3]);
                setcookie("nomeMaterno", $row[4]);
                setcookie("telefoneCelular", $row[5]);
                setcookie("telefoneFixo", $row[6]);
            }
            $puxarEndereco = "SELECT cep, lagradouro, bairro, localidade, uf, complemento FROM telecall.endereco where cpf = '$cpf'";
            $result = $mysqli->execute_query($puxarEndereco);
            while ($row = $result->fetch_row()) {
                setcookie("cep", $row[0]);
                setcookie("rua", $row[1]);
                setcookie("bairro", $row[2]);
                setcookie("localidade", $row[3]);
                setcookie("uf", $row[4]);
                setcookie("complemento", $row[5]);
            }
            header("Location: ../paginaCliente.php");
        } else {
            header("Location:../error/errorRespostaIncorreta.html");
        }
    }
}
