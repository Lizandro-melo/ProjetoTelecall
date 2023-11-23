function loadTable() {
    $.ajax({
        url: './server/buscar_clientes.php',
        method: 'POST',
        data: {

        },
        dataType: 'json',
        success: function (data) {
            var tableBody = document.getElementById('table-body');
            tableBody.innerHTML = '';

            data.forEach(function (cliente) {
                var row = document.createElement('tr');
                row.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap">${cliente.cpf}</td>
                <td class="px-6 py-4 whitespace-nowrap">${cliente.nome}</td>
                <td class="px-6 py-4 whitespace-nowrap">${cliente.sexo}</td>
                <td class="px-6 py-4 whitespace-nowrap">${cliente.data_nascimento}</td>
                <td class="px-6 py-4 whitespace-nowrap">${cliente.nome_materno}</td>
                <td class="px-6 py-4 whitespace-nowrap">${cliente.telefone_celular}</td>
                <td class="px-6 py-4 whitespace-nowrap">${cliente.telefone_fixo}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button onclick="excluirCliente('${cliente.cpf}', '${cliente.nome}')" class="px-4 py-2 bg-red-500 text-white rounded-full hover:bg-red-700">Excluir</button>
                </td>
            `;
                tableBody.appendChild(row);
            });
            $('#search').on('input', function () {
                var searchTerm = $(this).val().toLowerCase();
                $('#table-body tr').filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1)
                });
            });
        },
        error: function (xhr, status, error) {
            console.error('Erro ao buscar os dados dos clientes comuns: ' + error);
        }
    });
}

function excluirCliente(cpfClienteComum, nomeCliente) {
    $.ajax({
        url: './server/excluir_cliente.php',
        method: 'POST',
        data: {
            cpfClienteComum: cpfClienteComum,
            nomeCliente: nomeCliente
        },
        success: function () {
            loadTable();
            console.log("entrou");
        },
        error: function (xhr, status, error) {
            console.error('Erro ao excluir o cliente: ' + error);
        }
    });
}

loadTable();

