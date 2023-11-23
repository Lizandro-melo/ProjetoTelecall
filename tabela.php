<!DOCTYPE html>
<html lang="pt-br" id="document">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telecall - Consulta de Usuario</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
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
            <img onclick="window.location.href='paginaMaster.php'" id="logo"
                class="w-4/5 pl-5 py-4 max-sm:w-2/4 cursor-pointer" src="img/logotelecall.png" alt="logo-telecall" />
        </section>
    </header>
    <main class="p-5">
        <h1 class="text-2xl font-bold mb-4">Lista de Clientes Comuns</h1>
        <button id="imprimir" class="px-4 py-2 bg-red-500 text-white rounded-full my-5 hover:bg-red-700">Gerar
            PDF</button>
        <input type="text" id="search" placeholder="Pesquisar por nome"
            class="w-full rounded-md p-2 border border-gray-300 mb-4 focus:outline-none focus:border-primary">
        <div class="overflow-x-auto">
            <table id="tabelaCliente" class="min-w-full bg-white rounded-md shadow-lg">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CPF
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sexo
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data
                            de Nascimento</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome
                            da Mãe</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Celular</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fixo
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações
                        </th>
                    </tr>
                </thead>
                <tbody id="table-body" class="">

                </tbody>
            </table>
        </div>
    </main>
    <section class="bg-primary flex w-full fixed bottom-0 h-6 justify-end pr-5 items-center gap-5">
        <a href="./server/exitServer.php"
            class="flex text-sm justify-center items-center text-black bg-white rounded-full h-5 px-2">Sair</a>
    </section>
</body>
<script src="js/trocarTema.js"></script>
<script src="js/puxarClientes.js"></script>
<script>
    let btn = document.getElementById("imprimir")
    btn.addEventListener("click", () => {
        window.print();
    })
</script>
</html>