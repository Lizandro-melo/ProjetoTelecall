<?php
session_start();
if (session_status() === PHP_SESSION_DISABLED) {
    header("location: index.php");

}

if($_SESSION["role"] != "master"){
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Master</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Mulish:wght@300;400&display=swap" rel="stylesheet" />
    <style>
        main {
            font-family: "Montserrat", sans-serif;
            font-family: "Mulish", sans-serif;
        }
    </style>
</head>

<body class="transition-colors">
    <header class="flex bg-primary max-lg:justify-between z-10">
        <section>
            <img onclick="window.location.href= 'paginaMaster.php'" id="logo" class="w-4/5 pl-5 py-4 max-sm:w-2/4 cursor-pointer" src="img/logotelecall.png" alt="logo-telecall" />
        </section>
        <section class="flex items-center relative">
            <section class="h-full peer/menuresponsivo justify-center items-center hidden max-lg:!flex max-sm:w-10 pr-5 cursor-pointer">
                <img class="w-14 invert" src="img/icons/menuicon.png" alt="icon menu" />
            </section>
            <ul class="transition-all flex gap-8 text-sm h-full items-center text-white font-semibold max-lg:bg-red-700 max-lg:h-96 max-lg:w-screen max-lg:absolute max-lg:flex-col max-lg:gap-0 z-10 max-lg:-top-96 max-lg:right-0 hover:top-full max-lg:peer-hover/menuresponsivo:top-full">
                <li class="h-full flex justify-center items-center relative cursor-pointer lg:after:content-['&#9660;'] after:ml-1 after:text-white after:text-sm group/menu max-lg:w-full max-lg:h-20">
                    Beneficios
                    <ul class="!hidden transition-all lg:group-hover/menu:!flex lg:group-hover/menu:top-full flex flex-col -top-64 absolute z-10 min-w-full bg-red-700">
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                    </ul>
                </li>
                <li class="h-full flex justify-center items-center relative cursor-pointer lg:after:content-['&#9660;'] after:ml-1 after:text-white after:text-sm group/menu max-lg:w-full max-lg:h-20">
                    Planos
                    <ul class="!hidden transition-all lg:group-hover/menu:!flex lg:group-hover/menu:top-full flex flex-col -top-64 absolute z-10 min-w-full bg-red-700">
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                    </ul>
                </li>
                <li class="cursor-pointer max-lg:h-20 max-lg:flex max-lg:justify-center max-lg:items-center max-lg:w-full">
                    localização
                </li>
                <li class="cursor-pointer max-lg:h-20 max-lg:flex max-lg:justify-center max-lg:items-center max-lg:w-full">
                    Sobre
                </li>
                <li class="h-full flex justify-center items-center relative cursor-pointer lg:after:content-['&#9660;'] after:ml-1 after:text-white after:text-sm group/menu max-lg:w-full max-lg:h-20">
                    Contato
                    <ul class="!hidden transition-all lg:group-hover/menu:!flex lg:group-hover/menu:top-full flex flex-col -top-64 absolute z-10 min-w-full bg-red-700">
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800">
                            Exemplo
                        </li>
                    </ul>
                </li>
                <li class="h-full flex justify-center items-center relative cursor-pointer lg:after:content-['&#9660;'] after:ml-1 after:text-white after:text-sm group/menu max-lg:w-full max-lg:h-20">
                    Sistemas
                    <ul class="!hidden transition-all lg:group-hover/menu:!flex lg:group-hover/menu:top-full flex flex-col -top-64 absolute z-10 min-w-full bg-red-700">
                        <li class="h-14 w-full px-5 flex justify-center items-center hover:bg-red-800"
                        onclick="window.location.href = 'tabela.php'"
                        >
                            Consultar Cliente
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <section>
            <?php
            echo "<span class='text-white text-xl absolute top-8 right-5'>" . $_SESSION["login"] . " - master </span>"
            ?>
        </section>
    </header>
    <main>
        <section class="relative">
            <section id="slide" class="flex overflow-hidden scroll-smooth">
                <img class="imagens w-screen flex-none" src="img/carousel/1.png" alt="" />
                <img class="imagens w-screen flex-none" src="img/carousel/2.png" alt="" />
                <img class="imagens w-screen flex-none" src="img/carousel/3.png" alt="" />
            </section>
        </section>
        <section class="flex flex-col justify-center items-center text-padrao">
            <span class="font-semibold text-2xl my-10 max-lg:text-base">Beneficios para sua empresa.</span>
            <section class="flex flex-wrap justify-center gap-10 w-4/5">
                <section class="flex w-72 flex-col h-72 justify-center items-center shadow-lg shadow-slate-900 text-center gap-5 p-8 rounded-2xl hover:scale-105 transition-transform max-lg:w-48 max-lg:h-48 max-lg:text-xs max-lg:gap-2">
                    <span>Redução de custos</span>
                    <img class="max-lg:w-12" src="img/icons/icons-beneficios/icone-reducao.png" alt="redução icon" />
                    <span>Elimine o custo de investimento em equipamentos e
                        manutenção.</span>
                </section>
                <section class="flex w-72 flex-col h-72 justify-center items-center shadow-lg shadow-slate-900 text-center gap-5 p-8 rounded-2xl hover:scale-105 transition-transform max-lg:w-48 max-lg:h-48 max-lg:text-xs max-lg:gap-2">
                    <span>Pronto para usar</span>
                    <img class="max-lg:w-12" src="img/icons/icons-beneficios/icone-pronto.png" alt="pronto icon" />
                    <span>Receba os aparelhos já formatos, com tudo instalado e configurado
                        conforme sua necessidade.</span>
                </section>
                <section class="flex w-72 flex-col h-72 justify-center items-center shadow-lg shadow-slate-900 text-center gap-5 p-8 rounded-2xl hover:scale-105 transition-transform max-lg:w-48 max-lg:h-48 max-lg:text-xs max-lg:gap-2">
                    <span>Modernização</span>
                    <img class="max-lg:w-12" src="img/icons/icons-beneficios/icone-modernizacao.png" alt="mordenização icon" />
                    <span>O parque de TI da sua empresa sempre atualizado com os
                        equipamentos mais modernos do mercado.</span>
                </section>
                <section class="flex w-72 flex-col h-72 justify-center items-center shadow-lg shadow-slate-900 text-center gap-5 p-8 rounded-2xl hover:scale-105 transition-transform max-lg:w-48 max-lg:h-48 max-lg:text-xs max-lg:gap-2">
                    <span>Manutenção</span>
                    <img class="max-lg:w-12" src="img/icons/icons-beneficios/icone-manutencao.png" alt="manutenção icon" />
                    <span>Realizadas de forma ágil e sem custo adicional.</span>
                </section>
                <section class="flex w-72 flex-col h-72 justify-center items-center shadow-lg shadow-slate-900 text-center gap-5 p-8 rounded-2xl hover:scale-105 transition-transform max-lg:w-48 max-lg:h-48 max-lg:text-xs max-lg:gap-2">
                    <span>Logística Completa</span>
                    <img class="max-lg:w-12" src="img/icons/icons-beneficios/icone-logistica.png" alt="log icon" />
                    <span>Entrega e retirada em todo o Brasil.</span>
                </section>
                <section class="flex w-72 flex-col h-72 justify-center items-center shadow-lg shadow-slate-900 text-center gap-5 p-8 rounded-2xl hover:scale-105 transition-transform max-lg:w-48 max-lg:h-48 max-lg:text-xs max-lg:gap-2">
                    <span>Suporte</span>
                    <img class="max-lg:w-12" src="img/icons/icons-beneficios/icone-suporte.png" alt="sup icon" />
                    <span>Time de especialistas disponível 24x7.</span>
                </section>
            </section>
        </section>
        <section class="flex flex-col items-center">
            <h2 id="localizacao" class="my-10 text-2xl font-medium text-padrao max-lg:text-base">
                Nossa localização
            </h2>
            <iframe class="w-3/4 h-96 max-lg:h-full rounded-xl" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1836.3524211121767!2d-43.34734190448022!3d-22.997878752823084!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bda488eb4a8e5%3A0xd92e16bc83ef0d07!2sTelecall!5e0!3m2!1spt-BR!2sbr!4v1685073986609!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
        <section class="flex flex-col items-center">
            <section class="w-5/6 text-center text-padrao justify-center">
                <h2 id="sobre" class="my-10 text-2xl font-medium max-lg:text-base">
                    Sobre a Telecall
                </h2>
                <p class="max-lg:text-sm">
                    A Telecall é uma operadora regulada pela ANATEL, detentora de uma
                    rede de fibra própria, de alta capacidade, oferecendo aos seus
                    clientes uma nova experiência de telefonia e Internet empresarial,
                    com o mais alto padrão de qualidade, velocidade e disponibilidade.
                    Soluções que contam com uma série de serviços de valores
                    adicionados, gerando aos clientes maior produtividade, dinamismo e
                    efetividade nas operações.
                </p>
            </section>
            <section class="flex gap-5 mt-10">
                <section class="flex max-lg:hidden gap-10 scale-75 -z-10">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8wMFmszGWZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jW3iTCw6T-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </section>
            </section>
        </section>
    </main>
    <footer class="bg-primary mt-10">
        <section class="flex max-xl:flex-col justify-around max-xl:items-center py-28">
            <section class="w-1/3 relative max-xl:flex max-xl:my-8">
                <section class="flex gap-x-3 centralizar-footer max-xl:relative">
                    <img src="img/Telecall-footer.png" alt="Logo-Telecall-footer" />
                    <span class="invert">&#169;</span>
                </section>
            </section>
            <section class="w-6/12 flex gap-x-7 max-xl:flex-col max-xl:w-3/4 max-xl:gap-y-7">
                <section class="flex flex-col py-5 px-9 text-center bg-white rounded-2xl">
                    <h2 class="mb-4 text-padrao font-medium">Contato</h2>
                    <ul class="text-red-700 font-medium">
                        <li>joselizandro@souunisuam.com.br</li>
                        <li>
                            <a href="https://github.com/Lizandro-melo" target="_Blank">
                                Github
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/jos%C3%A9-lizandro-2a85b1234/" target="_blank">
                                LinkedIn
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="flex flex-col py-5 px-9 text-center bg-white rounded-2xl">
                    <h2 class="mb-4 text-padrao font-medium">Descubra</h2>
                    <ul class="text-red-700 font-medium">
                        <li>
                            <a href="#beneficios"> Beneficios </a>
                        </li>
                        <li>
                            <a href="#planos"> Planos </a>
                        </li>
                        <li>
                            <a href="#localizacao"> Localização </a>
                        </li>
                        <li>
                            <a href="#cpaas"> CPAAS </a>
                        </li>
                        <li>
                            <a href="#sobre"> Sobre </a>
                        </li>
                    </ul>
                </section>
                <section class="flex flex-col py-5 px-9 text-center bg-white rounded-2xl">
                    <h2 class="mb-4 text-padrao font-medium">Links</h2>
                    <ul class="text-red-700 font-medium">
                        <li>
                            <a href="paginaPrincipal.html"> Home </a>
                        </li>
                        <li>
                            <a href="paginaCadastro.html"> Cadastro </a>
                        </li>
                        <li>
                            <a href="index.php"> Login </a>
                        </li>
                    </ul>
                </section>
            </section>
        </section>
    </footer>
    <section class="bg-primary flex w-full fixed bottom-0 h-6 justify-end pr-5 items-center gap-5">
        <a href="./server/exitServer.php" class="flex text-sm justify-center items-center text-padrao bg-white rounded-full h-5 px-2">Sair</a>
        <button id="themes" class="flex text-sm justify-center items-center text-padrao bg-white rounded-full h-5 px-2"><img src="img/icons/theme.png" class="invert w-4" alt="icon perfil">Tema</button>
        <a class="flex text-sm justify-center items-center bg-white rounded-full h-5 px-2"><img src="img/icons/icon-perfil.svg" alt="icon perfil">Cliente Master</a>
    </section>
    <script src="js/buttonTop.js"></script>
    <script src="js/carrossel.js"></script>
    <script src="js/trocarTema.js"></script>
    <script src="js/navBar.js"></script>
</body>

</html>