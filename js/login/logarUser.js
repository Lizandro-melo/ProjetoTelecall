const entradas = document.getElementsByName("entradas");


const button = document.querySelector("#entrar")
const user = JSON.parse(localStorage.getItem("user"));
const userLogin = user.login;
const userSenha = user.senha;

button.addEventListener("click", (event) => {
    event.preventDefault();
    if(entradas[0].value == userLogin && entradas[1].value == userSenha){
        window.open("paginaPrincipal.html", "_self")
    }else if(entradas[0].value == "" || entradas[1].value == ""){
        alert("Preencha todos os campos!")
    }else{
        alert("Login ou senha não conferem!")
    }
})

