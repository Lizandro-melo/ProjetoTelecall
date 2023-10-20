$("#cadastrar").submit((e) => { 
    e.preventDefault();
    return;
});

if($("#senha").val() != $("#comSenha").val()){
    console.log("Entrou");
}