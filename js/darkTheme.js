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

const carregamentoDaPagina = () => {
    
    if (localStorage.getItem("themes") == "black") {
        trocarTema(classNames, blacks)
    } else if (localStorage.getItem("themes") == "white") {
        trocarTema(classNames, whites)
    }

}

buttonThemes.addEventListener("click", () => {
    if (localStorage.getItem("themes") == "white" || localStorage.getItem("themes") == null) {
        trocarTema(classNames, blacks)
    } else if (localStorage.getItem("themes") == "black") {
        trocarTema(classNames, whites)
    }
})

const trocarTema = (classname, color) => {
    if (color == blacks) {
        for (let i = 0; i <= classname.length; i++) {
            bodyDoc.style.setProperty(classname[i], color[i])
        }
        localStorage.setItem("themes", "black")
    } else {
        for (let i = 0; i <= classname.length; i++) {
            bodyDoc.style.setProperty(classname[i], color[i])
        }
        localStorage.setItem("themes", "white")
    }

}
