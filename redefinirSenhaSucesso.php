<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Redefinir Senha</title>
  </head>

  <body class="transition-colors">
    <header class="flex bg-primary max-lg:justify-between z-10">
      <section>
        <img
          onclick="window.location.href= 'index.php'"
          id="logo"
          class="w-4/5 pl-5 py-4 max-sm:w-2/4 cursor-pointer"
          src="img/logotelecall.png"
          alt="logo-telecall"
        />
      </section>
    </header>
    <main>
      <section
        id="erro"
        class="bg-modal shadow-lg shadow-stone-700 w-2/5 absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 rounded-lg border border-stone-500 max-lg:w-full flex justify-center items-center flex-col"
      >
        <section class="justify-center flex items-center pt-4">
          <span class="font-bold text-2xl max-lg:text-xl text-padrao"
            >Senha Alterada</span
          >
        </section>
        <p class="text-xl mt-11 text-center w-3/4 text-padrao">
          Senha alterada com sucesso
        </p>
        <section class="flex items-center mt-10 gap-2 pb-7">
          <button
            class="font-semibold hover:bg-red-700 bg-modal-button hover:text-white transition-colors shadow-xl w-32 h-10 border-red-700 border text-padrao "
            onclick="window.location.href = './paginaLoginTipo.html'"
          >
            Ok
          </button>
        </section>
      </section>
    </main>
    <section
      class="bg-primary flex w-full fixed bottom-0 h-6 justify-end pr-5 items-center gap-5"
    >
      <button
        id="themes"
        class="flex text-sm justify-center items-center text-padrao bg-modal-button rounded-full h-5 px-2"
      >
        <img
          src="img/icons/theme.png"
          class="invert w-4"
          alt="icon perfil"
        />Tema
      </button>
    </section>
    <script src="js/trocarTema.js"></script>
  </body>
</html>
