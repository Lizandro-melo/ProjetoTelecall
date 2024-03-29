const [classNames, blacks, whites] = [
  [
    "--bg-color-fundo",
    "--bg-color-modal",
    "--button-color-modal",
    "--text-label",
    "--text-padrao",
    "--invert",
  ],
  ["#25252b", "#45454a", "#45454a", "white", "white", "100%"],
  ["white", "rgb(245 245 244 / 1)","white", "rgb(30 58 138)", "black", 0],
];

$("#themes").click(() => {
  if (
    localStorage.getItem("themes") == "white" ||
    localStorage.getItem("themes") == null
  ) {
    verificarTema(classNames, blacks);
    $("#themes").toggleClass("justify-start");
    $("#themes").toggleClass("justify-end");
  } else if (localStorage.getItem("themes") == "black") {
    verificarTema(classNames, whites);
    $("#themes").toggleClass("justify-start");
    $("#themes").toggleClass("justify-end");
  }
});

function onload() {
  if (localStorage.getItem("themes") == "black") {
    verificarTema(classNames, blacks);
  } else if (localStorage.getItem("themes") == "white") {
    verificarTema(classNames, whites);
  }
}

const verificarTema = (classname, color) => {
  if (color == blacks) {
    for (let i = 0; i <= classname.length; i++) {
      $("body").css(classname[i], color[i]);
    }
    localStorage.setItem("themes", "black");
  } else {
    for (let i = 0; i <= classname.length; i++) {
      $("body").css(classname[i], color[i]);
    }
    localStorage.setItem("themes", "white");
  }
};

window.onload();
