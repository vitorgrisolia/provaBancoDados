<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShopp Amigão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav class="navbar navbar-light bg-light">
            <form class="container-fluid justify-content-center">
                <a href="/home" class="btn btn-outline-success me-2">home</a>
                <button class="btn btn-outline-success me-2" id="btnListarProprietarios">Listar Proprietários</button>
                <button class="btn btn-outline-success me-2" id="btnListarPets">Listar Pets</button>
            </form>
        </nav>
    </div>

    <!-- Conteúdo da página aqui -->
    <div id="listaProprietariosContainer"></div>
    <div id="listaPetsContainer"></div>

    <!-- Footer -->
    <footer class="footer fixed-bottom py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© <?php echo date('Y'); ?> <strong>PetShopp Amigão</strong>. Desenvolvido por <strong>Vitor Grisolia</strong>.</span>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="listaProprietarios.js"></script>
    <script src="listaPets.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Adiciona um evento de clique ao botão "Listar Proprietários"
        document.getElementById("btnListarProprietarios").addEventListener("click", function() {
            loadProprietarios();
        });

        // Adiciona um evento de clique ao botão "Listar Pets"
        document.getElementById("btnListarPets").addEventListener("click", function() {
            loadPets();
        });
    </script>
</body>
</html>
