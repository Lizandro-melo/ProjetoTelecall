<!DOCTYPE html>
<html lang="pt-br" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet">
    <title>Telecall - Area do Cliente</title>
</head>
<body class="transition-colors">
    <header class="shadow-lg shadow-zinc-400">
        <nav class="bg-secundary w-full h-7 flex justify-end items-center">
            <ul class="mr-7">
                <li>
                    <button id="themes" class="flex items-center justify-start bg-white rounded-2xl w-16 h-6">
                        <img class="w-10 invert" src="img/icons/icone_ps.png" alt="icone-tema">
                    </button>
                </li>
            </ul>
        </nav>
        <section class="bg-primary flex justify-start h-16 items-center">
            <img class="ml-5 h-14 rounded-3xl" src="img/logo-telecall.png" alt="Logo-Telecall">
        </section>
    </header>
    <main>
        <form action="http://localhost/projetotelecall/src/server/config.php" method="POST" class="max-lg:w-full absolute centralizar bg-form w-2/5 h-3/5 flex flex-col py-10 items-center rounded-3xl">
            <section
                class="bg-primary w-2/5 h-14 rounded-2xl flex items-center justify-center text-white font-semibold mb-4">
                <h1 class="text-2xl">Área do cliente</h1>
            </section>
            <section class="flex flex-col">
                <label for="login" class="my-2 text-label font-semibold ">Login</label>
                <input placeholder="Digite seu login"
                    class="invalid:outline-red-700 w-60 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2" type="text"
                    id="login" name="login" required>
                <label for="senha" class="my-2 text-label font-semibold ">Senha</label>
                <input placeholder="Digite sua senha"
                    class=" invalid:outline-red-700 w-60 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2" type="password"
                    id="senha" name="senha" required>
            </section>
            <section class=" relative w-60">
                <span class="absolute text-xs left-0 top-1 text-padrao">Ainda não é cliente?<br>
                    <a class="text-red-700 font-semibold" href="./paginaCadastro.php">Cadastre-se aqui.</a>
                </span>
                <span class="absolute text-xs right-0 top-1 text-padrao">
                    <a class="font-semibold text-red-700" href="#">Esqueci a senha.
                    </a>
                </span>
                <button type="submit"
                    class="absolute font-semibold top-70s centralizar border-red-800 border w-44 h-10 hover:bg-red-800 hover:text-white transition-colors text-padrao">
                    Entrar
                </button>
            </section>
        </form>
    </main>
    <script src="js/trocarTema.js"></script>
</body>

</html>