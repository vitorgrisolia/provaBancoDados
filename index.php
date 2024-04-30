<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShopp Amigão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PetShopp Amigão</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="provaBancoDados/listaProprietarios">Listar Proprietários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="provaBancoDados/listaPets">Listar Pets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="provaBancoDados/cadastroPet">Cadastrar Pet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="provaBancoDados/cadastroProprietarios">Cadastrar Proprietarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página aqui -->
    <div id="listaProprietariosContainer"></div>
    <div id="listaPetsContainer"></div>

    <footer class="footer fixed-bottom py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© <?php echo date('Y-m-d'); ?> <strong>PetShopp Amigão</strong>. Desenvolvido por <strong>Vitor Grisolia</strong> Framework Ravi.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
