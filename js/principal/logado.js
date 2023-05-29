const user = JSON.parse(localStorage.getItem("user"));
const userName = user.nome
const buttonUser = document.getElementById("user_name")
const painel = document.getElementById("janela-user");
const buttonSair = document.getElementById("sair");


const preConfig = () => {
    buttonUser.innerHTML = userName
    painel.style.top = "-120px"
}

buttonUser.addEventListener("click", () =>{

    if(painel.style.top == "-120px"){
        painel.style.top = "25px"
    } else if(painel.style.top == "25px"){
        painel.style.top = "-120px"
    }

})

buttonSair.addEventListener("click", () => {
    window.open("index.html", "_self");
})

preConfig()