<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../css/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <title>Telecall - Area do Cliente</title>
</head>

<body class="transition-colors">
  <header class="shadow-lg shadow-zinc-400">
    <nav class="bg-secundary w-full h-7 flex justify-end items-center">
      <ul class="mr-7">
        <li>
          <button id="themes" class="flex items-center justify-start bg-white rounded-2xl w-16 h-6">
            <img class="w-10 invert" src="../img/icons/icone_ps.png" alt="icone-tema" />
          </button>
        </li>
      </ul>
    </nav>
    <section class="bg-primary flex justify-start h-16 items-center">
      <img class="ml-5 h-14 rounded-3xl" src="../img/logo-telecall.png" alt="Logo-Telecall" />
    </section>
  </header>
  <main>
    <section id="erro" class="z-50 max-lg:w-full centralizar bg-form w-2/5 flex flex-col py-10 justify-center items-center rounded-3xl border border-black">
      <section class="bg-primary w-2/4 h-14 rounded-2xl flex items-center justify-center text-white font-semibold">
        <h1 class="text-2xl">Erro de Autenticação</h1>
      </section>
      <p class="text-xl mt-11 text-center w-3/4 text-padrao">
        Desculpe, mas as informações de login ou senha fornecidas estão incorretas. Por favor, verifique seus dados e tente novamente
      </p>
      <section class="flex items-center mt-10 gap-2">
        <button class="font-semibold border-red-800 border w-44 h-10 hover:bg-red-800 hover:text-white transition-colors text-padrao">
          Ok
        </button>
      </section>
    </section>
  </main>
  <script src="../js/trocarTema.js"></script>
</body>

</html>