<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - Pagina Principal</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet">

</head>

<body class="transition-colors">
    <header class="sticky top-0 shadow-lg shadow-zinc-400 z-50">
        <nav class="bg-secundary w-full h-7 flex justify-end items-center">
            <ul class="flex mr-7 gap-4">
                <li>
                    <a href="paginaLogin.php" class="cursor-pointer flex items-center bg-white rounded-2xl w-full px-4 h-6 gap-2">
                        <span><img src="img/icons/icon-perfil.svg" alt="user"></span>
                        <h2>
                            Área do cliente
                        </h2>
                    </a>
                </li>
                <li>
                    <button id="themes" class="flex items-center bg-white rounded-2xl w-16 h-6">
                        <img class="w-10 invert" src="img/icons/icone_ps.png" alt="icone-tema">
                    </button>
                </li>
            </ul>
        </nav>
        <section class="bg-primary flex justify-start h-16 items-center">
            <img class="ml-5 h-14 rounded-3xl" src="img/logo-telecall.png" alt="Logo-Telecall">
            <nav class="absolute right-16">
                <ul class="flex gap-x-16">
                    <li class="lg:block hidden text-base px-4 py-1 text-white font-medium"><a href="#beneficios">Beneficios</a></li>
                    <li class="lg:block hidden text-base px-4 py-1 text-white font-medium"><a href="#planos">Planos</a>
                    </li>
                    <li class="lg:block hidden text-base px-4 py-1 text-white font-medium"><a href="#localizacao">Localização</a></li>
                    <li class="lg:block hidden text-base px-4 py-1 text-white font-medium"><a href="#sobre">Sobre</a>
                    </li>
                    <li id="b-navbar" class="lg:hidden block"><img src="img/icons/icon-options.svg" alt=""></li>
                </ul>
            </nav>
        </section>
        <section id="options" class="xl:hidden absolute -z-30 right-0 w-full -translate-y-full transition-transform">
            <nav>
                <ul class="flex flex-col justify-center items-center gap-x-16">
                    <a href="#beneficios" class="w-full option bg-primary hover:bg-red-800 cursor-pointer text-base px-4 py-10 text-white font-medium text-center">
                        <li>
                            Beneficios
                        </li>
                    </a>
                    <a href="#planos" class="w-full option bg-primary hover:bg-red-800 cursor-pointer text-base px-4 py-10 text-white font-medium text-center">
                        <li>
                            Planos
                        </li>
                    </a>
                    <a href="#localizacao" class="w-full option bg-primary hover:bg-red-800 cursor-pointer text-base px-4 py-10 text-white font-medium text-center">
                        <li>
                            Localização
                        </li>
                    </a>
                    <a href="#sobre" class="w-full option bg-primary hover:bg-red-800 cursor-pointer text-base px-4 py-10 text-white font-medium text-center">
                        <li>
                            Sobre
                        </li>
                    </a>
                </ul>
            </nav>
        </section>
    </header>
    <main class="-z-50">

        <section class="relative -z-50">
            <section id="slide" class="flex overflow-hidden scroll-smooth">
                <img class="imagens -z-50 w-screen flex-none" src="img/carousel/1.png" alt="">
                <img class="imagens -z-50 w-screen flex-none" src="img/carousel/2.png" alt="">
                <img class="imagens -z-50 w-screen flex-none" src="img/carousel/3.png" alt="">
            </section>
        </section>
        <section class="-z-50 flex flex-col items-center">
            <h2 id="beneficios" class="-z-50 md:text-3xl text-center my-10 font-medium text-label     ">
                Beneficios para sua empresa.
            </h2>
            <section class="flex flex-wrap w-4/5 justify-center gap-16 -z-50">
                <article class="-z-50  relative flex justify-center flex-col items-center w-72 h-72 p-5 text-center shadow-2xl rounded-3xl gap-4 hover:scale-110 transition-transform">
                    <h2 class="text-label font-medium text-lg">
                        Redução de custos
                    </h2>
                    <img src="img/icons/icons-beneficios/icone-reducao.png" alt="icone Redução">
                    <p class="text-label">
                        Elimine o custo de investimento em equipamentos e manutenção.
                    </p>
                </article>
                <article class="relative flex justify-center flex-col items-center w-72 h-72 p-5 text-center shadow-2xl rounded-3xl gap-4 hover:scale-110 transition-transform">
                    <h2 class="text-label font-medium text-lg">
                        Pronto para usar
                    </h2>
                    <img src="img/icons/icons-beneficios/icone-pronto.png" alt="icone Pronto para usar">
                    <p class="text-label">
                        Receba os aparelhos já formatos, com tudo instalado e configurado conforme sua necessidade.
                    </p>
                </article>
                <article class="relative flex justify-center flex-col items-center w-72 h-72 p-5 text-center shadow-2xl rounded-3xl gap-4 hover:scale-110 transition-transform">
                    <h2 class="text-label font-medium text-lg">
                        Modernização
                    </h2>
                    <img src="img/icons/icons-beneficios/icone-modernizacao.png" alt="icone Modernização">
                    <p class="text-label">
                        O parque de TI da sua empresa sempre atualizado com os equipamentos mais modernos do mercado.
                    </p>
                </article>
                <article class="relative flex justify-center flex-col items-center w-72 h-72 p-5 text-center shadow-2xl rounded-3xl gap-4 hover:scale-110 transition-transform">
                    <h2 class="text-label font-medium text-lg">
                        Manutenção
                    </h2>
                    <img src="img/icons/icons-beneficios/icone-manutencao.png" alt="icone manutenção">
                    <p class="text-label">
                        Realizadas de forma ágil e sem custo adicional.
                    </p>
                </article>
                <article class="relative flex justify-center flex-col items-center w-72 h-72 p-5 text-center shadow-2xl rounded-3xl gap-4 hover:scale-110 transition-transform">
                    <h2 class="text-label font-medium text-lg">
                        Logística Completa
                    </h2>
                    <img src="img/icons/icons-beneficios/icone-logistica.png" alt="icone logistica">
                    <p class="text-label">
                        Entrega e retirada em todo o Brasil.
                    </p>
                </article>
                <article class="relative flex justify-center flex-col items-center w-72 h-72 p-5 text-center shadow-2xl rounded-3xl gap-4 hover:scale-110 transition-transform">
                    <h2 class="text-label font-medium text-lg">
                        Suporte
                    </h2>
                    <img src="img/icons/icons-beneficios/icone-suporte.png" alt="icone Suporte">
                    <p class="text-label">
                        Time de especialistas disponível 24x7.
                    </p>
                </article>
            </section>
        </section>
        <section class="flex flex-col items-center">
            <h2 id="planos" class="my-10 text-3xl font-medium text-label z-30">Conheça nossos planos</h2>
            <section class="flex flex-col items-center">
                <h2 class="text-center my-10 text-2xl font-medium text-label z-30">
                    Internet
                </h2>
                <section class="flex flex-wrap w-full justify-center gap-16">
                    <article class="flex justify-center flex-col items-center w-64 h-64 p-5 text-center shadow-2xl rounded-3xl relative gap-4 hover:scale-110 transition-transform">
                        <h2 class="text-label font-medium text-lg">Banda larga</h2>
                        <h3 class="text-label font-medium text-lg">100MB</h3>
                        <span class="text-label font-medium text-lg animate-bounce">R$ <span class="text-blue-600">99,90</span>/mês</span>
                        <button class="border px-4 py-2 border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 transition-colors ">Contrate</button>
                    </article>
                    <article class="flex justify-center flex-col items-center w-64 h-64 p-5 text-center shadow-2xl rounded-3xl relative gap-4 hover:scale-110 transition-transform">
                        <h2 class="text-label font-medium text-lg">Banda larga</h2>
                        <h3 class="text-label font-medium text-lg">300MB</h3>
                        <span class="text-label font-medium text-lg animate-bounce">R$ <span class="text-blue-600">119,90</span>/mês</span>
                        <button class="border px-4 py-2 border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 transition-colors ">Contrate</button>
                    </article>
                    <article class="flex justify-center flex-col items-center w-64 h-64 p-5 text-center shadow-2xl rounded-3xl relative gap-4 hover:scale-110 transition-transform">
                        <h2 class="text-label font-medium text-lg">Banda larga</h2>
                        <h3 class="text-label font-medium text-lg">600MB</h3>
                        <span class="text-label font-medium text-lg animate-bounce">R$ <span class="text-blue-600">299,99</span>/mês</span>
                        <button class="border px-4 py-2 border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 transition-colors ">Contrate</button>
                    </article>
                </section>
                <h2 class="my-10 text-2xl font-medium text-label z-30">
                    Telefonia
                </h2>
                <section class="flex flex-wrap w-full justify-center gap-16">
                    <article class="flex justify-center flex-col items-center w-64 h-64 p-5 text-center shadow-2xl rounded-3xl relative gap-10 hover:scale-110 transition-transform">
                        <h2 class="text-label font-medium text-lg">Softphone</h2>
                        <span class="text-label font-medium text-lg animate-bounce">R$ <span class="text-blue-600">69,90</span>/mês</span>
                        <button class="border px-4 py-2 border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 transition-colors ">Contrate</button>
                    </article>
                    <article class="flex justify-center flex-col items-center w-64 h-64 p-5 text-center shadow-2xl rounded-3xl relative gap-10 hover:scale-110 transition-transform">
                        <h2 class="text-label font-medium text-lg">Aparelho IP</h2>
                        <span class="text-label font-medium text-lg animate-bounce">R$ <span class="text-blue-600">79,90</span>/mês</span>
                        <button class="border px-4 py-2 border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 transition-colors ">Contrate</button>
                    </article>
                    <article class="flex justify-center flex-col items-center w-64 h-64 p-5 text-center shadow-2xl rounded-3xl relative gap-10 hover:scale-110 transition-transform">
                        <h2 class="text-label font-medium text-lg">Call center / Aparelho IP</h2>
                        <span class="text-label font-medium text-lg animate-bounce">R$ <span class="text-blue-600">239,90</span>/mês</span>
                        <button class="border px-4 py-2 border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 transition-colors ">Contrate</button>
                    </article>
                </section>
            </section>
        </section>
        <section class="flex flex-col items-center">
            <h2 id="localizacao" class="my-10 text-2xl font-medium text-label z-30">Nossa localização</h2>
            <iframe class="w-3/4 h-96 rounded-xl" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1836.3524211121767!2d-43.34734190448022!3d-22.997878752823084!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bda488eb4a8e5%3A0xd92e16bc83ef0d07!2sTelecall!5e0!3m2!1spt-BR!2sbr!4v1685073986609!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
        <button id="btnTop" class=" transition-all fixed bottom-20 -right-20 w-16 h-16 bg-blue-950 rounded-full"><span class="invert font-black">◬</span></button>
        <section class="flex flex-col items-center">
            <section class=" w-5/6 text-center justify-center">
                <h2 id="sobre" class="my-10 text-2xl font-medium text-label z-30">Sobre a Telecall</h2>
                <p class="text-padrao">A Telecall é uma operadora regulada pela ANATEL, detentora de uma rede de fibra
                    própria, de alta
                    capacidade, oferecendo aos seus clientes uma nova experiência de telefonia e Internet
                    empresarial, com o mais alto padrão de qualidade, velocidade e disponibilidade. Soluções que
                    contam com uma série de serviços de valores adicionados, gerando aos clientes maior
                    produtividade, dinamismo e efetividade nas operações.</p>
            </section>
            <section class="flex gap-5 mt-10">
                <section class="flex gap-10 scale-75 -z-10">
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
                    <img src="img/Telecall-footer.png" alt="Logo-Telecall-footer">
                    <span class="invert">&#169;</span>
                </section>
            </section>
            <section class="w-6/12 flex gap-x-7 max-xl:flex-col max-xl:w-3/4 max-xl:gap-y-7">
                <section class="flex flex-col py-5 px-9 text-center bg-white rounded-2xl">
                    <h2 class="mb-4 text-blue-900 font-medium">Contato</h2>
                    <ul class="text-red-700 font-medium">
                        <li>
                            joselizandro@souunisuam.com.br
                        </li>
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
                    <h2 class="mb-4 text-blue-900 font-medium">Descubra</h2>
                    <ul class="text-red-700 font-medium">
                        <li>
                            <a href="#beneficios">
                                Beneficios
                            </a>
                        </li>
                        <li>
                            <a href="#planos">
                                Planos
                            </a>
                        </li>
                        <li>
                            <a href="#localizacao">
                                Localização
                            </a>
                        </li>
                        <li>
                            <a href="#cpaas">
                                CPAAS
                            </a>
                        </li>
                        <li>
                            <a href="#sobre">
                                Sobre
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="flex flex-col py-5 px-9 text-center bg-white rounded-2xl ">
                    <h2 class="mb-4 text-blue-900 font-medium">Links</h2>
                    <ul class="text-red-700 font-medium">
                        <li>
                            <a href="paginaPrincipal.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="paginaCadastro.html">
                                Cadastro
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                Login
                            </a>
                        </li>
                    </ul>
                </section>
            </section>
        </section>
    </footer>
    <script src="js/buttonTop.js"></script>
    <script src="js/carrossel.js"></script>
    <script src="js/trocarTema.js"></script>
    <script src="js/navBar.js"></script>
</body>

</html>