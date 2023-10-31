<?php

require_once "./db/ConnectionDb.class.php";
session_start();


//Codigo faz quase a mesma coisa que o de autenticar Comum, a diferença é que ele rerna para uma pagina de pergunta diferente
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();

    $entrada = $_POST["entrada"];

    $perguntaCliente = ["Qual seu CEP do seu endereço?", "Qual o nome da sua mãe?", "Qual a data do seu nascimento?"];
    $perguntaBanco = ["cep", "nome_materno", "data_nascimento"];

    // Crio uma Variavel randomica de 1 a 3 para a pergunta aleatoria 2fa
    $Random = rand(0, 2);

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
        $_SESSION['perguntaCliente'] = $perguntaCliente[$Random];
        $_SESSION['perguntaBanco'] = $perguntaBanco[$Random];
        header("Location:../2fa/pergunta2faSenha.php");
    }
}
