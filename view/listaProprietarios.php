<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proprietários</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav class="navbar navbar-light bg-light">
            <form class="container-fluid justify-content-center">
                <a href="/" class="btn btn-outline-success me-2">home</a>
                <button class="btn btn-outline-success me-2" onclick="loadProprietarios()">Listar Proprietários</button>
                <a href="/listaPets" class="btn btn-outline-success me-2">Listar Pets</a>
            </form>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Lista de Proprietários</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <tbody id="listaProprietariosTableBody">
                        <?php foreach ($proprietarios as $proprietario): ?>
                            <tr>
                                <th scope="row"><?php echo $proprietario['id']; ?></th>
                                <td><?php echo $proprietario['nome']; ?></td>
                                <td><?php echo $proprietario['telefone']; ?></td>
                                <td><?php echo $proprietario['email']; ?></td>
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
