const botao = document.querySelector("#button-cadastro");
const entradas = document.getElementsByName("entradas");

const verificarCampos = () => {
    let resposta;
    entradas.forEach(entrada => {
        if (entrada.value == "") {
            resposta = "Campos Vazios";
            entrada.focus()
        }else if (entradas[10].value != entradas[11].value) {
            resposta = "Senhas diferentes";
        }
    });
    return resposta;
}


