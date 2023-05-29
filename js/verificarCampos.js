const botao = document.querySelector("#button-cadastro");
const entradas = document.getElementsByName("entradas");

const verificarCampos = () => {
    let teste = false;

    entradas.forEach(entrada => {
        if (entrada.value == "") teste = true; // verifica se os campos estão vazios;
    });
    if (entradas[10].value != entradas[11].value) teste = true; // verifica se os campos de senha estão com os valores iguais
    return teste;
}

