function loadTable() {
    $.ajax({
        url: './server/puxarLogComum.php',
        method: 'POST',
        data: {

        },
        dataType: 'json',
        success: function (data) {
            var tableBody = document.getElementById('table-body');
            tableBody.innerHTML = '';

            data.forEach(function (log) {
                var row = document.createElement('tr');
                row.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap">${log.cpf}</td>
                <td class="px-6 py-4 whitespace-nowrap">${log.log_mensage}</td>
                <td class="px-6 py-4 whitespace-nowrap">${log.data_hora}</td>
            `;
                tableBody.appendChild(row);
            });
        },
        error: function (xhr, status, error) {
            console.error('Erro ao buscar os dados dos logs comuns: ' + error);
        }
    });
}

loadTable();