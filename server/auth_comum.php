<?php
session_start();

require_once "./db/ConnectionDb.class.php";

// Em todas as folhas php você vera algo parecido com isso, um if verificando se existe certo dado no $_SERVER
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Aqui eu instacio o objeto executando a conexão
    $dbConnection = new ConnectionDb();

    //Aqui eu pego a responsta da conexão com o metodo get do Obj
    $mysqli = $dbConnection->getCon();

    // Utilizando a variavel $_POST eu pego os dados enviados pelo o usuario;
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $perguntaCliente = ["Qual seu CEP do seu endereço?", "Qual o nome da sua mãe?", "Qual a data do seu nascimento?"];
    $perguntaBanco = ["cep", "nome_materno", "data_nascimento"];

    // Crio uma Variavel randomica de 1 a 3 para a pergunta aleatoria 2fa
    $Random = rand(0, 2);

    //Função responsavel por veriicar se o login existe, como forma de segurança verifico primeiro o login depois a senha;
    function verificarLogin($mysqli, $login)
    {
        $query = "SELECT login FROM telecall.cliente_comum where login = '$login'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }

    //Essa função é responsavel por verificar a senha do usuario;
    function verificarSenha($mysqli, $login, $senha)
    {
        $loginReturn = verificarLogin($mysqli, $login)["login"];
        $query = "SELECT cpf FROM telecall.cliente_comum WHERE senha = '$senha' and login = '$loginReturn'";
        $result = $mysqli->execute_query($query);
        return ($result->num_rows == 1) ? $result->fetch_assoc() : false;
    }

    // Aqui eu executo as funções, assim verificando o login e senha em uma função so;
    if (verificarSenha($mysqli, $login, $senha) === false) {
        // caso retorne false, significa que nada foi encontrado, assim disparando e devolvendo ao cliente a pagina de erro
        $_SESSION["role"] = "erro";
        header("Location:../error/errorAuth.php");
    } else {
        //caso o contrario efetuara o login e assim enviado para a tela de pergunta 2fa o cpf do usuario para assim executar a consulta;
        $_SESSION["cpf"] = verificarSenha($mysqli, $login, $senha)["cpf"];
        //Com base na variavel ramdomica o php retornara ao cliente uma pagina de pergunta sobre o usuario aleatoriamente;
        $_SESSION['perguntaCliente'] = $perguntaCliente[$Random];
        $_SESSION['perguntaBanco'] = $perguntaBanco[$Random];
        header("Location: ../2fa/pergunta2fa.php");
    }
}
