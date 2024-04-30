<?php
require_once __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

// Crie uma instância do Router
$router = new Router("http://localhost/provabancodados");

// Configure as rotas e namespaces
$router->namespace("Controller");

// Defina as rotas usando os métodos HTTP correspondentes
$router->get("/", function () {
    include __DIR__ . '/index.php';
});
$router->get("/listaProprietarios", function () {
    include __DIR__ . '/Controller/listaProprietarios.php';
});
$router->get("/listaPets", function () {
    include __DIR__ . '/Controller/listaPets.php';
});

// Rota para o formulário de cadastro de proprietários
$router->get("/cadastroProprietario", function () {
    include __DIR__ . 'Controller/cadastro_proprietario.php';
});

// Rota para processar o cadastro de proprietários
$router->post("/salvarProprietario", function () {
    include __DIR__ . 'View/cadastro_proprietario.php';
});

// Rota para o formulário de cadastro de pets
$router->get("/cadastroPet", function () {
    include __DIR__ . 'Controller/cadastro_pets.php';
});

// Rota para processar o cadastro de pets
$router->post("/salvarPet", function () {
    include __DIR__ . 'View/cadastro_pets.php';
});

// Execute as rotas
$router->dispatch();

// Redirecione todos os erros
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
?>
