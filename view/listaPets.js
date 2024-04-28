function loadPets() {
    // Fazer uma requisição AJAX para obter os dados dos pets
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Quando a resposta estiver pronta e for bem-sucedida
            var pets = JSON.parse(xhr.responseText);

            // Construir a tabela HTML com os dados dos pets
            var tableBody = document.querySelector('tbody');
            tableBody.innerHTML = ""; // Limpar o conteúdo da tabela antes de adicionar novos dados

            pets.forEach(function(pet) {
                var row = "<tr>";
                row += "<th scope='row'>" + pet.id + "</th>";
                row += "<td>" + pet.nome + "</td>";
                row += "<td>" + pet.especie + "</td>";
                row += "<td>" + pet.raca + "</td>";
                row += "<td>" + pet.idade + "</td>";
                row += "<td>" + pet.proprietario_id + "</td>";
                row += "</tr>";
                tableBody.innerHTML += row;
            });
        }
    };
    xhr.open("GET", "/api/pets", true); // Substitua "/api/pets" pela URL real da sua API de pets
    xhr.send();
}
