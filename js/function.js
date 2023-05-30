const verificarCampos = () => {
    const entradas = document.getElementsByName("entradas");
    let codigo;
    entradas.forEach(entrada => {
        if (entrada.value == "") {
            codigo = 0001;
        } else if (entradas[10].value != entradas[11].value) {
            codigo = 0010;
        }
    });
    if (codigo == 0001) {
        return "Campos vazios";
    } else if (codigo == 0010) {
        return "Senhas Diferentes";
    }
}

const enviarDados = () => {
    const botao = document.querySelector("#button-cadastro");
    botao.addEventListener("click", (event) => {
        event.preventDefault();

        if (verificarCampos() != undefined) {
            return alert(verificarCampos());
        }

        const user = criarUser();
        localStorage.setItem("user", JSON.stringify(user));
        window.open("index.html", "_self")
    })
}

const criarUser = () => {
    const user = {
        nome,
        login,
        senha
    }
    user.nome = entradas[0].value + " " + entradas[1].value;
    user.cpf = entradas[2].value;
    user.dataNascimento = entradas[3].value;
    user.sexo = entradas[4].value;
    user.nomeMaterno = entradas[5].value;
    user.celular = entradas[6].value;
    user.telefone = entradas[7].value;
    user.endereco = entradas[8].value;
    user.login = entradas[9].value;
    user.senha = entradas[10].value;
    return user;
}

const [classNames, blacks, whites] = [[
    "--text-color-article",
    "--bg-color-form",
    "--text-planos-color",
    "--bg-color-article",
    "--shadow-color-primary",
    "--shadow-color-secundary",
    "--bg-color-padrao",
    "--text-button-hover",
    "--bg-color-button-theme",
    "--invert"
], [
    "#dfdfdf",
    "#858585b6",
    "#ffffff",
    "#3a3a3a",
    "#333333",
    "#363636",
    "#2e2e2e",
    "black",
    "white",
    100
], [
    "#004A7B",
    "#d9d9d9b6",
    "#006bcd",
    "#f0f0f0",
    "#e7e7e7",
    "#ffffff",
    "white",
    "white",
    "black",
    0
]]



const filtrarCampos = () => {
    const cpfInput = document.getElementById("cpf");
    cpfInput.addEventListener("input", () => {

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
    })
}

const obsevadorDeThema = () => {
    if (localStorage.getItem("themes") == "black") {
        verificarTema(classNames, blacks)
    } else if (localStorage.getItem("themes") == "white") {
        verificarTema(classNames, whites)
    }
}

const trocarTema = () => {
    const buttonThemes = document.getElementById('themes');
    buttonThemes.addEventListener("click", () => {
        if (localStorage.getItem("themes") == "white" || localStorage.getItem("themes") == null) {
            verificarTema(classNames, blacks)
        } else if (localStorage.getItem("themes") == "black") {
            verificarTema(classNames, whites)
        }
    })
}

const verificarTema = (classname, color) => {
    const bodyDoc = document.body;
    if (color == blacks) {
        for (let i = 0; i <= classname.length; i++) {
            bodyDoc.style.setProperty(classname[i], color[i])
        }
        localStorage.setItem("themes", "black")
    } else {
        for (let i = 0; i <= classname.length; i++) {
            bodyDoc.style.setProperty(classname[i], color[i])
        }
        localStorage.setItem("themes", "white")
    }
}

const logarUser = () => {
    const entradas = document.getElementsByName("entradas");
    const button = document.querySelector("#entrar")
    const user = JSON.parse(localStorage.getItem("user"));
    try {
        const userLogin = user.login;
        const userSenha = user.senha;
    } catch (error) {
        console.log("Ignore")
    }

    button.addEventListener("click", (event) => {
        event.preventDefault();
        if (entradas[0].value == "" || entradas[1].value == "") {
            alert("Preencha todos os campos!")
        } else if (entradas[0].value == userLogin && entradas[1].value == userSenha) {
            window.open("paginaPrincipal.html", "_self")
        } else {
            alert("Login ou senha não conferem!")
        }
    })
}


const preConfig = () => {
    const painel = document.getElementById("janela-user");
    const user = JSON.parse(localStorage.getItem("user"));
    const buttonUser = document.getElementById("user_name");
    painel.style.top = "-120px"
    try {
        buttonUser.innerHTML = user.name
    } catch (Error) {
        alert("Nome de usuario não encontrado, por favor faça o login...")
    }

}

const painelUsuario = () => {
    const painel = document.getElementById("janela-user");
    const buttonUser = document.getElementById("user_name");
    const buttonSair = document.getElementById("sair");
    buttonUser.addEventListener("click", () => {
        if (painel.style.top == "-120px") {
            painel.style.top = "25px"
        } else if (painel.style.top == "25px") {
            painel.style.top = "-120px"
        }
    })
    buttonSair.addEventListener("click", () => {
        window.open("index.html", "_self");
    })
}