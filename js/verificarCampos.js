const botao = document.querySelector("#button-cadastro");
const entradas = document.getElementsByName("entradas");

const verificarCampos = () => {
    let boo = false;
    entradas.forEach(entrada => {
        if (entrada.value === "") boo = true;
    });
    return boo;
}