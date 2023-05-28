const cadastrar = () => {
    botao.addEventListener("click", (event) => {
        event.preventDefault();
        if (verificarCampos()) return

        const user = criarUser();
        localStorage.setItem("user", JSON.stringify(user));
        window.open("index.html",  "_self")
    })    
}


cadastrar()