const tamanhoTela = $(".imagens")[0].width;
const slide = document.getElementById("slide")
const quantidadeImagens = $(".imagens").length
pontoFinal = (quantidadeImagens - 1) * (tamanhoTela)
setInterval(() => {
    $("#slide")[0].scrollLeft += tamanhoTela
    if ($("#slide")[0].scrollLeft > tamanhoTela) {
        $("#slide")[0].scrollLeft = 0
    }
}, 2500)