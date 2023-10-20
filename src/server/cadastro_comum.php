<?php

require_once "./db/ConnectionDb.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dbConnection = new ConnectionDb();

    $mysqli = $dbConnection->getCon();


    // CAPTURAR TODOS OS INPUTS
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $dataNascimento = $_POST["dataNascimento"];
    $cpf = $_POST["cpf"];
    $nomeMaterno = $_POST["nomeMaterno"];
    $telCelular = $_POST["telCelular"];
    $telFixo = $_POST["telFixo"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $localidade = $_POST["localidade"];
    $uf = $_POST["uf"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $comSenha = $_POST["comSenha"];

    // VERIFICAR SE O CPF EXISTE SE CASO ELE EXISTIR MANDAR PARA A PAGINA DE ERROR
    $verificarCpf = "SELECT cpf FROM telecall.cliente_comum where cpf = '$cpf'";
    if ($result = $mysqli->execute_query($verificarCpf)) {
        if ($result->num_rows == 1) {
            header("Location: ../error/errorCpfCadastrado.html");
            return;
        }
    }

    // VERIFICAR SE O LOGIN EXISTE SE CASO ELE EXISTIR MANDAR PARA A PAGINA DE ERROR
    $verificarLogin = "SELECT login FROM telecall.cliente_comum where login = '$login'";
    if ($result = $mysqli->execute_query($verificarLogin)) {
        if ($result->num_rows == 1) {
            header("Location: ../error/errorLoginExistente.html");
            return;
        }
    }

    // VERIFICAR SE AS DUAS SENHAS CONFEREM
    if($senha != $comSenha){
        header("Location: ../error/errorSenhasDiferentes.html");
        return;
    }

    // QUERY PARA CADASTRAR O CLIENTE
    $queryCadastro = ("INSERT INTO telecall.cliente_comum (`cpf`, `nome`, `sexo`, `data_nascimento`, `nome_materno`, `telefone_celular`, `telefone_fixo`, `login`, `senha`) VALUES ('$cpf', '$nome', '$sexo', '$dataNascimento', '$nomeMaterno', '$telCelular', '$telFixo', '$login', '$senha')");

    // QUERY PARA PREENCHER O ENDEREÇO DO CLIENTE
    $queryEndereco = ("INSERT INTO telecall.endereco (`cep`, `lagradouro`, `bairro`, `localidade`, `cpf`, `uf`, `complemento`) VALUES ('$cep', '$rua', '$bairro', '$localidade', '$cpf', '$uf', '$complemento')");


    // EXECUTA AS QUERYS 
    $mysqli->execute_query($queryCadastro);
    $mysqli->execute_query($queryEndereco);

    $mysqli->commit();

    // MOSTRA A TELA DE MENSAGEM E DIRECIONA PARA A TELA DE LOGIN
    echo "<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <link rel='shortcut icon' href='../img/favicon.png' type='image/x-icon' />
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>
        <script src='https://cdn.tailwindcss.com'></script>
        <link href='../css/output.css' rel='stylesheet' />
        <link rel='stylesheet' href='../css/style.css' />
        <title>Telecall - Area do Cliente</title>
        </head>

        <body class='transition-colors'>
        <header class='flex bg-primary max-lg:justify-between z-10'>
            <section>
            <img
                onclick='window.location.href= '../index.html''
                id='logo'
                class='w-4/5 pl-5 py-4 max-sm:w-2/4 cursor-pointer'
                src='../img/logotelecall.png'
                alt='logo-telecall'
            />
            </section>
        </header>
        <main>
            <section
            id='erro'
            class='bg-modal shadow-lg shadow-stone-700 w-2/5 absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 rounded-lg border border-stone-500 max-lg:w-full flex justify-center items-center flex-col'
            >
            <p class='text-xl mt-11 text-center w-3/4 text-padrao'>
                CADASTRADO COM SUCESSO!
            </p>
            <section class='flex items-center mt-10 gap-2 pb-7'>
                <button
                class='font-semibold hover:bg-red-700 bg-modal-button hover:text-white transition-colors shadow-xl w-32 h-10 border-red-700 border text-padrao '
                id='logar'
                >
                Ok
                </button>
            </section>
            </section>
        </main>
        <section
            class='bg-primary flex w-full fixed bottom-0 h-6 justify-end pr-5 items-center gap-5'
        >
            <button
            id='themes'
            class='flex text-sm justify-center items-center text-padrao bg-modal-button rounded-full h-5 px-2'
            >
            <img
                src='../img/icons/theme.png'
                class='invert w-4'
                alt='icon perfil'
            />Tema
            </button>
        </section>
        <script src='../js/trocarTema.js'></script>
        <script>
            const logar = document.getElementById('logar');
            logar.addEventListener('click', () => {
                window.location.href = '../paginaLoginTipo.html';
            });
        </script>
        </body>
        </html>";

    $mysqli->close();
}
