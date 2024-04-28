<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pets</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Lista de Pets</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Espécie</th>
                            <th scope="col">Raça</th>
                            <th scope="col">Idade</th>
                            <th scope="col">Proprietário ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaDePets as $pet): ?>
                            <tr>
                                <th scope="row"><?php echo $pet['id']; ?></th>
                                <td><?php echo $pet['nome']; ?></td>
                                <td><?php echo $pet['especie']; ?></td>
                                <td><?php echo $pet['raca']; ?></td>
                                <td><?php echo $pet['idade']; ?></td>
                                <td><?php echo $pet['proprietario_id']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
