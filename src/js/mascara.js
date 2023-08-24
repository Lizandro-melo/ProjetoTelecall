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
