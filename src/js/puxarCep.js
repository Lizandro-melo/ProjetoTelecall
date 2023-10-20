const cep = document.getElementById("cep");
let cepValue = cep.value;
const rua = document.getElementById("rua");
const bairro = document.getElementById("bairro");
const localidade = document.getElementById("localidade");
const uf = document.getElementById("uf");

cep.addEventListener("input", async (e) => {
    if (e.target.value.length === 8) {
        const request = await fetch(`http://viacep.com.br/ws/${e.target.value}/json/`).then(result => result.json())
        rua.value = request.logradouro
        bairro.value = request.bairro
        localidade.value = request.localidade
        uf.value = request.uf
    }
})