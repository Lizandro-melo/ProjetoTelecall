const cpfInput = document.getElementById("cpf");

cpfInput.addEventListener("input", function () {
    let cpf = cpfInput.value;
    cpf = cpf.replace(/\D/g, ""); // Remove qualquer caractere não numérico

    if (cpf.length > 3 && cpf.length <= 6) {
        cpf = cpf.replace(/^(\d{3})(\d{1,3})$/, "$1.$2");
    } else if (cpf.length > 6 && cpf.length <= 9) {
        cpf = cpf.replace(/^(\d{3})(\d{3})(\d{1,3})$/, "$1.$2.$3");
    } else if (cpf.length > 9) {
        cpf = cpf.replace(/^(\d{3})(\d{3})(\d{3})(\d{1,2})$/, "$1.$2.$3-$4");
    }

    cpfInput.value = cpf;
});