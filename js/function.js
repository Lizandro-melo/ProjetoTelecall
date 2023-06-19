const verificarCampos = () => {
    let codigo;
    let regexLogin = /^\D{6}$/
    login = $("#login").val();
    let regex = /^\D{8}$/
    senha = $("#senha").val();

    for (let i = 0; i < $(".entradas").length; i++) {
        const element = $(".entradas")[i];
        if (element.value == "") {
            codigo = "0001";
        } else if (!regex.test(senha) || !regexLogin.test(login)) {
            codigo = "0020";
        } else if ($(".entradas")[8].value != $(".entradas")[9].value) {
            codigo = "0010";
        }
    }

    if (codigo == "0001") {
        return "Preencha todos os campos";
    } else if (codigo == "0010") {
        return "As senhas não conferem";
    } else if (codigo == "0020") {
        return "Os campos de login e senha devem seguir os requisitos"
    }

}

const enviarDados = () => {
    $("#button-cadastro").click((event) => {
        event.preventDefault();
        if (verificarCampos() != undefined) {
            modal(verificarCampos());
            $(".entradas").focus()
            return;
        }
        criarUser();
        window.open("index.html", "_self");

    })
}

const criarUser = () => {
    const user = {

    }
    user.nome = $(".entradas")[0].value + " " + $(".entradas")[1].value;
    user.cpf = $(".entradas")[2].value;
    user.login = $(".entradas")[7].value;
    user.senha = $(".entradas")[8].value;
    localStorage.setItem("user", JSON.stringify(user));
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
    "--text-mensagem-color",
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
    "black",
    0
]]



const filtrarCampos = () => {
    $("#cpf").on("input", () => {
        let cpf = $("#cpf").val();
        cpf = cpf.replace(/\D/g, "");

        cpf = cpf.replace(/^(\d{1,3})(\d{1,3})(\d{1,3})(\d{1,2})$/, "$1.$2.$3-$4");

        $("#cpf").val(cpf);
    })

    $("#tel-cel").on("input", () => {
        let cel = $("#tel-cel").val();
        cel = cel.replace(/\D/g, "")

        cel = cel.replace(/^(\d{1,2})(\d{1,5})(\d{1,4})$/, "($1) $2-$3");

        $("#tel-cel").val(cel)
    })
    $("#tel-fix").on("input", () => {
        let fix = $("#tel-fix").val();
        fix = fix.replace(/\D/g, "")
        fix = fix.replace(/^(\d{1,2})(\d{1,4})(\d{1,4})$/, "($1) $2-$3");
        $("#tel-fix").val(fix)
    })
    $("#senha").on("input", () => {
        let regex = /^\D{8}$/

        senha = $("#senha").val();

        if (regex.test(senha)) {
            $("#mensagemSenha").removeClass("mostrarMensagem");
        } else if ($("#senha")[0].value == "") {
            $("#mensagemSenha").removeClass("mostrarMensagem");
        } else {
            $("#mensagemSenha").addClass("mostrarMensagem");
        }

    })

    $("#login").on("input", () => {
        let regex = /^\D{6}$/

        login = $("#login").val();

        if (regex.test(login)) {
            $("#mensagemLogin").removeClass("mostrarMensagem");
        } else if ($("#login")[0].value == "") {
            $("#mensagemLogin").removeClass("mostrarMensagem");
        } else {
            $("#mensagemLogin").addClass("mostrarMensagem");
        }

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
    $("#themes").click(() => {
        if (localStorage.getItem("themes") == "white" || localStorage.getItem("themes") == null) {
            verificarTema(classNames, blacks)
        } else if (localStorage.getItem("themes") == "black") {
            verificarTema(classNames, whites)
        }
    })
}

const verificarTema = (classname, color) => {
    if (color == blacks) {
        for (let i = 0; i <= classname.length; i++) {
            $("body").css(classname[i], color[i])
        }
        localStorage.setItem("themes", "black")
    } else {
        for (let i = 0; i <= classname.length; i++) {
            $("body").css(classname[i], color[i])
        }
        localStorage.setItem("themes", "white")
    }
}

const logarUser = () => {
    const user = JSON.parse(localStorage.getItem("user"));
    $("#form-login").submit((event) => {
        try {
            if ($(".entradas")[0].value == "" || $(".entradas")[1].value == "") {
                event.preventDefault()
                modal("Preencha todos os Campos")
                return;
            } else if ($(".entradas")[0].value != user.login || $(".entradas")[1].value != user.senha) {
                event.preventDefault()
                modal("O Login ou senha não conferem")
                return;
            } else {
                event.preventDefault()
                window.open("paginaPrincipal.html", "_self")
            }
        } catch {
            event.preventDefault()
            modal("O Login ou senha não conferem")
        }
    })

}


const preConfig = () => {
    const user = JSON.parse(localStorage.getItem(`user`));
    try {
        $("#user_name").html(user.nome)
        return;
    } catch (Error) {
        window.open("index.html", "_self")
    }

}

const carrossel = () => {
    let tamanhoTela = $(".slides")[0].width
    pontoFinal = ($(".slides").length - 1) * (tamanhoTela)
    setInterval(() => {
        $("#imagens")[0].scrollLeft += tamanhoTela / 1.5
        if ($("#imagens")[0].scrollLeft > pontoFinal) {
            $("#imagens")[0].scrollLeft = 0
        }
    }, 2500)
}

const buttonTop = () => {
    window.onscroll = () => {
        const mybutton = document.getElementById("btnTop");
        mybutton.style.right = "-70px";
        if (document.body.scrollTop > 490 || document.documentElement.scrollTop > 490) {
            mybutton.style.right = "30px";
        } else {
            mybutton.style.right = "-70px";
        }

        mybutton.addEventListener("click", () => {
            document.documentElement.scrollTop = 0;
        }
        )
    };
}

const redefinirSenha = () => {
    $("#msg-login-senha").click(() => {
        $(".esqueci-senha").addClass("aparecer-container");
        $("#form-login").addClass("esconder-container");
        $(".exit").click(() => {
            $(".esqueci-senha").removeClass("aparecer-container");
            $("#form-login").removeClass("esconder-container");
        })
    })

}

const modal = (msg) => {
    $("#mensagem").html(msg);
    $(".janela-mensagem").addClass("aparecer-container");
    botaoExit($(".janela-mensagem"));
}

const botaoExit = janela => {
    $(".exit").click(() => {
        janela.removeClass("aparecer-container");
    })
}

const janelaUser = () => {

    $('#user_name').click(() => {
        $(".janela-user").toggleClass("janela-user-hidden");
    })

    $("#sair").click(() => {
        window.open("index.html", "_self");
    })



}

const fontSize = () => {
    $('#font').click(() => {
        $(".input-font-size").toggleClass("input-font-size-hidden");
        $("#font-size").val(1)
    })

}