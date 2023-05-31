const verificarCampos = () => {
    const entradas = document.getElementsByName("entradas");
    let codigo;
    entradas.forEach(entrada => {
        if (entrada.value == "") {
            codigo = 0001;
        } else if (entradas[8].value != entradas[9].value) {
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
    const entradas = document.getElementsByName("entradas");
    const nomeMaterno = document.getElementById("nome-materno");
    const telfix = document.getElementById("tel-fix");
    const user = {}
    user.nome = entradas[0].value + " " + entradas[1].value;
    user.cpf = entradas[2].value;
    user.dataNascimento = entradas[3].value;
    user.sexo = entradas[4].value;
    user.nomeMaterno = nomeMaterno.value;
    user.cel = entradas[5].value;
    user.telefone = telfix.value;
    user.endereco = entradas[6].value;
    user.login = entradas[7].value;
    user.senha = entradas[8].value;
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
    const celInput = document.getElementById("tel-cel");
    const fixInput = document.getElementById("tel-fix");

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
    celInput.addEventListener("input", () => {
        let cel = celInput.value;
        cel = cel.replace(/\D/g, "")
        if (cel.length > 2 && cel.length <= 7) {
            cel = cel.replace(/^(\d{2})(\d{1,5})$/, "($1) $2");
        } else if (cel.length <= 11) {
            cel = cel.replace(/^(\d{2})(\d{5})(\d{1,4})$/, "($1) $2-$3");
        }
        celInput.value = cel
    })
    fixInput.addEventListener("input", () => {
        let fix = fixInput.value;
        fix = fix.replace(/\D/g, "")
        if (fix.length > 2 && fix.length <= 6) {
            fix = fix.replace(/^(\d{2})(\d{1,4})$/, "($1) $2");
        } else if (fix.length <= 10) {
            fix = fix.replace(/^(\d{2})(\d{4})(\d{1,4})$/, "($1) $2-$3");
        }
        fixInput.value = fix
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
        } else if (entradas[0].value == user.login && entradas[1].value == user.senha) {
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
        buttonUser.innerHTML = user.nome
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

const carrossel = () => {
    const carrosselSlides = document.getElementById("imagens");
    const imagens = carrosselSlides.querySelectorAll(".slides");
    let pontoFinal = (imagens.length - 1) * 900
    setInterval(() => {
        carrosselSlides.scrollLeft += 900
        if (carrosselSlides.scrollLeft > pontoFinal) {
            carrosselSlides.scrollLeft = 0
        }
    }, 3000)
}