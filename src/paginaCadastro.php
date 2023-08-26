<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet">
    <script src="js/function.js"></script>
    <title>Telecall - Cadastro</title>
</head>

<body>
    <header class="shadow-lg shadow-zinc-400">
        <nav class="bg-secundary w-full h-7 flex justify-end items-center">
            <ul class="mr-7">
                <li>
                    <button id="themes" class="flex items-center bg-white rounded-2xl w-16 h-6">
                        <img class="w-10" src="img/icons/icone_ps.png" alt="icone-tema">
                    </button>
                </li>
            </ul>
        </nav>
        <section class="bg-primary flex justify-start h-16 items-center">
            <img class="ml-5 h-14 rounded-3xl" src="img/logo-telecall.png" alt="Logo-Telecall">
        </section>
    </header>
    
    <main>
        <form class="max-lg:w-full absolute centralizar responsivo h-4/5 bg-form flex flex-col pb-10 pt-5 px-10 items-center rounded-3xl">
            <section
                class="bg-primary max-lg:w-1/2 w-2/5 h-14 rounded-2xl flex items-center justify-center text-white font-semibold mb-4">
                <h1 class="text-2xl">Área de Cadastro</h1>
            </section>
            <section class="flex max-lg:flex-col">
                <section class="flex flex-col items-center mr-5 max-lg:mr-0">
                    <section class="flex">
                        <section class="flex flex-col mr-2">
                            <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="nome">Nome</label>
                            <input required placeholder="Digite seu nome"
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm peer"
                                type="text" id="nome" pattern="^[A-Za-zÀ-ú]{4,15}$" name="nome" autofocus />
                        </section>
                        <section class="flex flex-col ml-2">
                            <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="sobrenome">Sobrenome </label>
                            <input required placeholder="Digite seu sobrenome"
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                                type="text" id="sobrenome" name="sobrenome" pattern="^[A-Za-zÀ-ú]{4,15}$"  />
                        </section>
                    </section>
                    <section class="flex">
                        <section class="flex flex-col mr-2">
                            <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="cpf">CPF </label>
                            <input required placeholder="Digite seu CPF"
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                                type="text" id="cpf" name="cpf" maxlength="14" pattern="^[0-9\.\-]{14}" />
                        </section>
                        <section class="flex flex-col ml-2">
                            <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="data">Data de nascimento</label>
                            <input required
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                                type="date" id="data" name="data" pattern="^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$"/>
                        </section>
                    </section>
                    <section class="flex flex-col">
                        <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="sexo">Sexo</label>
                        <select id="sexo" name="sexo"
                            class="w-368 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm" required>
                            <option value="i" disabled selected>Selecione o sexo</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outros">Outros</option>
                        </select>
                    </section>
                    <section class="flex flex-col">
                        <label class="my-2 text-label font-semibold" for="nome-materno">Nome materno</label>
                        <input required placeholder="Digite o nome Materno"
                            class="invalid:outline-red-700 w-368 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                            type="text" maxlength="30" name="nomeMaterno" pattern="^[A-Za-zÀ-ú]{4,30}$"/>
                    </section>
                </section>
                <section class="flex flex-col items-center ml-5 max-lg:ml-0">
                    <section class="flex">
                        <section class="flex flex-col mr-2">
                            <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="tel-cel">Telefone celular</label>
                            <input required placeholder="(XX) XXXXX-XXXX"
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                                type="tel" id="tel-cel" maxlength="15" name="telCelular" pattern="^[0-9\(\)\-\s]{15}$"/>
                        </section>
                        <section class="flex flex-col ml-2">
                            <label class="my-2 text-label font-semibold" for="tel-fix">Telefone fixo</label>
                            <input placeholder="(XX) XXXX-XXXX" type="tel" id="tel-fix"
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                                maxlength="14" pattern="^[0-9\(\)\-\s]{14}$" name="telFixo"/>
                        </section>
                    </section>
                    <section class="flex flex-col">
                        <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="endereco">Endereço</label>
                        <input required placeholder="Digite seu endereço completo"
                            class="invalid:outline-red-700 w-368 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                            type="text" id="endereco" name="endereco"/>
                    </section>
                    <section class="flex flex-col ">
                        <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="login">Login</label>
                        <input required placeholder="Digite seu login"
                            class="invalid:outline-red-700 w-368 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                            type="text" id="login" pattern="^[A-Za-z0-9]{5,10}$" name="login"/>
                    </section>
                    <section class="flex">
                        <section class="flex-col flex mr-2">
                            <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="senha">Senha</label>
                            <input required placeholder="Digite uma senha"
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                                type="password" id="senha" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{10,}$" name="senha"/>
                        </section>
                        <section class="flex flex-col ml-2">
                            <label class="my-2 text-label font-semibold after:content-['*'] after:ml-0.5 after:text-red-500" for="confirm-senha">Confirmar senha
                            </label>
                            <input required placeholder="Comfirme sua senha"
                                class="invalid:outline-red-700 w-44 h-10 text-center bg-zinc-400 text-black placeholder:text-stone-900 pl-2 text-sm"
                                type="password" id="confirm-senha" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{10,}$"/>
                        </section>
                    </section>
                </section>
            </section>
            <section class="relative w-full">
                <button class="absolute font-semibold text-padrao top-14 centralizar border-red-800 border w-44 h-10 hover:bg-red-800 hover:text-white transition-colors">Enviar</button>
                <section>
                    <span class="max-lg:right-0 max-lg:top-10 absolute text-xs text-padrao right-36 top-6">Já é cliente Telecall? <br />
                        <a class="font-semibold text-red-700" href="paginaLogin.php">Fazer login</a>
                    </span>
                </section>
            </section>
        </form>
    </main>
    <script src="js/trocarTema.js"></script>
    <script src="js/mascara.js"></script>
</body>

</html>