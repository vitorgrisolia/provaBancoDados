function loadProprietarios() {
    // Fazer uma requisição AJAX para obter os dados dos proprietários
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Quando a resposta estiver pronta e for bem-sucedida
            var proprietarios = JSON.parse(xhr.responseText);

            // Construir a tabela HTML com os dados dos proprietários
            var tableBody = document.getElementById("listaProprietariosTableBody");
            tableBody.innerHTML = ""; // Limpar o conteúdo da tabela antes de adicionar novos dados

            proprietarios.forEach(function(proprietario) {
                var row = "<tr>";
                row += "<th scope='row'>" + proprietario.id + "</th>";
                row += "<td>" + proprietario.nome + "</td>";
                row += "<td>" + proprietario.telefone + "</td>";
                row += "<td>" + proprietario.email + "</td>";
                row += "</tr>";
                tableBody.innerHTML += row;
            });
        }
    };
    xhr.open("GET", "url_para_obter_proprietarios.php", true); // Substitua "url_para_obter_proprietarios.php" pela URL real do seu backend
    xhr.send();
}
