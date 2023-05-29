const cadastrar = () => {
    botao.addEventListener("click", (event) => {
        event.preventDefault();
        if (verificarCampos()) return console.log("Não enviou") //teste de campos
        const user = criarUser();
        localStorage.setItem("user", JSON.stringify(user));
        console.log("Enviou os dados")
        //window.open("index.html",  "_self")
    })    
}


cadastrar()