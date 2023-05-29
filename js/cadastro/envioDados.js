const cadastrar = () => {
    botao.addEventListener("click", (event) => {
        event.preventDefault();

        if (verificarCampos() == "Campos Vazios") {
            return alert("Preencha todos os campos!")
        } else if (verificarCampos() == "Senhas diferentes") {
            return alert("As senhas devem ser iguais!")
        }



        const user = criarUser();
        localStorage.setItem("user", JSON.stringify(user));
        window.open("index.html", "_self")
    })
}

cadastrar()