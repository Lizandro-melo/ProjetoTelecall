const user = {
    nome:"",
    cpf:"",
    dataNascimento:"",
    sexo:"",
    nomeMaterno:"",
    celular:"",
    telefone:"",
    endereco:"",
    login:"",
    senha:""
}

const criarUser = () => {
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
