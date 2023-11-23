$("#cpf").on("input", () => {
    let cpf = $("#cpf").val();
    cpf = cpf.replace(/\D/g, "");

    cpf = cpf.replace(/^(\d{1,3})(\d{1,3})(\d{1,3})(\d{1,2})$/, "$1.$2.$3-$4");

    $("#cpf").val(cpf);
})
$("#telCelular").on("input", () => {
    let cel = $("#telCelular").val();
    cel = cel.replace(/\D/g, "")

    cel = cel.replace(/^(\d{1,2})(\d{1,5})(\d{1,4})$/, "($1) $2-$3");

    $("#telCelular").val(cel)
})
$("#telFixo").on("input", () => {
    let fix = $("#telFixo").val();
    fix = fix.replace(/\D/g, "")
    fix = fix.replace(/^(\d{1,2})(\d{1,4})(\d{1,4})$/, "($1) $2-$3");
    $("#telFixo").val(fix)
})
