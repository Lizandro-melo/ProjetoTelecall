/*
mudam{
    --text-color-article: #dfdfdf;
    --bg-color-form: #858585b6;
    --text-planos-color: #ffffff;
    --bg-color-article: #3a3a3a;
    --shadow-color-primary: #333333;
    --shadow-color-secundary: #363636;
    --bg-color-padrao: #2e2e2e;
    --text-button-hover: black;
    --bg-color-button-theme: white;
    --invert:100;
}

white
    :root {
    --text-color-article: #004A7B;
    --bg-color-form: #d9d9d9b6;
    --text-planos-color: #006bcd;
    --bg-color-article: #f0f0f0;
    --shadow-color-primary: #e7e7e7;
    --shadow-color-secundary: #ffffff;
    --bg-color-padrao: white;
    --text-button-hover: white;
    --bg-color-button-theme: black;
    --invert:0;
}
*/

const [classNames, blacks, whites] = [[
    "--text-color-article",
    "--bg-color-form",
    "--text-planos-color",
    "--bg-color-article",
    "--shadow-color-primary",
    "--shadow-color-secundary",
    "--bg-color-padrao",
    "--text-button-hover",
    "--bg-color-button-theme",
    "--invert"
], [
    "#dfdfdf",
    "#858585b6",
    "#ffffff",
    "#3a3a3a",
    "#333333",
    "#363636",
    "#2e2e2e",
    "black",
    "white",
    100
], [
    "#004A7B",
    "#d9d9d9b6",
    "#006bcd",
    "#f0f0f0",
    "#e7e7e7",
    "#ffffff",
    "white",
    "white",
    "black",
    0
]]

const buttonThemes = document.getElementById('themes');
const bodyDoc = document.body;

function carregamentoDaPagina(){
    if (localStorage.getItem("themes") == "black") {
        trocarTema(classNames, blacks)
        localStorage.setItem("themes", "black")
    } else if (localStorage.getItem("themes") == "white") {
        trocarTema(classNames, whites)
        localStorage.setItem("themes", "white")
    }
}

buttonThemes.addEventListener("click", () => {
    if (localStorage.getItem("themes") == "white" || localStorage.getItem("themes") == null) {
        trocarTema(classNames, blacks)
    } else if (localStorage.getItem("themes") == "black") {
        trocarTema(classNames, whites)
    }
})

const trocarTema = (classname,color) => {
    for (let i = 0; i <= classname.length; i++) {
        bodyDoc.style.setProperty(classname[i], color[i])
        if (localStorage.getItem("themes") == "black") {
            localStorage.setItem("themes", "white")
        }else{
            localStorage.setItem("themes", "black")
        }
    }
}
