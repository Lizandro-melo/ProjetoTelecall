<?php
session_start();

if($_SESSION['pergunta'] != "cep"){
}else if ($_SESSION['pergunta'] != "data_nascimento"){
}else if ($_SESSION['pergunta'] != "nome_materno"){
}

?>
<!DOCTYPE html>
<html lang="pt-br" class="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="css/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400&display=swap" rel="stylesheet" />
  <style>
    * {
      font-family: "Mulish", sans-serif;
    }
  </style>
  <title>2FA</title>
</head>

<body class="transition-colors">
  <header class="flex bg-primary max-lg:justify-between z-10">
    <section>
      <img onclick="window.location.href= '../index.php'" id="logo" class="w-4/5 pl-5 py-4 max-sm:w-2/4 cursor-pointer" src="../img/logotelecall.png" alt="logo-telecall" />
    </section>
  </header>
  <main>
    <form action="../server/resposta2faSenha.php" method="POST" id="cliente" class="bg-modal shadow-lg shadow-stone-700 w-2/4 absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 rounded-lg border border-stone-500 max-lg:w-full">
      <section class="justify-center flex items-center">
        <span class="font-bold text-2xl max-lg:text-xl text-padrao pt-5">2FA</span>
      </section>
      <section class="flex flex-col items-center justify-center pb-5 pt-8">
        <label for="login" class="my-2 text-label font-semibold">Qual o nome da sua mãe?</label>
        <input placeholder="Exatamente como no cadastro" class="h-10 w-72 pl-3 focus:outline-none border bg-slate-50 text-slate-700 border-slate-200 shadow-none invalid:outline-red-600 invalid:text-red-700 placeholder:text-slate-500 focus:invalid:border-red-600 focus:invalid:ring-red-600" type="text" id="resposta" name="resposta" required />
        <section class="w-60">
          <section class="flex w-full justify-evenly mt-10">
            <button type="submit" class="font-semibold border-red-800 border w-44 h-10 hover:bg-red-800 hover:text-white transition-colors text-padrao">
              Enviar
            </button>
          </section>
        </section>
      </section>
    </form>
  </main>
  <section class="bg-primary flex w-full fixed bottom-0 h-6 justify-end pr-5 items-center gap-5">
    <button id="themes" class="flex text-sm justify-center items-center text-padrao bg-modal-button rounded-full h-5 px-2">
      <img src="../img/icons/theme.png" class="invert w-4" alt="icon perfil" />Tema
    </button>
  </section>
  <script src="js/trocarTema.js"></script>
</body>

</html>