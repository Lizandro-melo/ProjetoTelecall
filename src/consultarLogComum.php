<?php
session_start();
if ($_SESSION["role"] != "comum") {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telecall - Consulta de Usuario</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400&display=swap" rel="stylesheet" />
    <style>
        * {
            font-family: "Mulish", sans-serif;
        }
    </style>
</head>

<body>
    <header class="flex bg-primary max-lg:justify-between z-10">
        <section>
            <img onclick="window.location.href='paginaMaster.php'" id="logo" class="w-4/5 pl-5 py-4 max-sm:w-2/4 cursor-pointer" src="img/logotelecall.png" alt="logo-telecall" />
        </section>
    </header>
    <main class="p-5">
        <div class="overflow-x-auto flex justify-center items-center">
            <table class="w-3/4 bg-white rounded-md shadow-lg">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CPF</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mensagem</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data e Hora</th>
                    </tr>
                </thead>
                <tbody id="table-body" class="">

                </tbody>
            </table>
        </div>
    </main>
    <section class="bg-primary flex w-full fixed bottom-0 h-6 justify-end pr-5 items-center gap-5">
        <a href="./server/exitServer.php" class="flex text-sm justify-center items-center text-black bg-white rounded-full h-5 px-2">Sair</a>
    </section>
</body>
<script src="js/trocarTema.js"></script>
<script src="js/puxarLogComum.js"></script>

</html>