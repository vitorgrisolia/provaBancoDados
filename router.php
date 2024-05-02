<?php
require_once __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

// Crie uma instância do Router
$router = new Router("URL_BASE");

// Configure as rotas e namespaces
$router->namespace(namespace:"Controller");

$router->group(group:null);
$router->get("/", function () {
    include __DIR__ . '/index.php';
});

$router->group(group:"provabancodados");

$router->get("/listaProprietarios", "Controller\listaProprietarios:listaProprietarios");

$router->get("/listaPets", "Controller\listaPets:listaPets");

$router->get("/cadastroProprietario", function () {
    include __DIR__ . 'Controller/cadastro_proprietario.php';
});
$router->post("/cadastroProprietario", function () {
    include __DIR__ . 'Controller/cadastro_proprietario.php';
});

$router->get("/cadastroPet", function () {
    include __DIR__ . 'Controller/cadastro_pets.php';
});
$router->post("/cadastroPet", function () {
    include __DIR__ . 'Controller/cadastro_pets.php';
});

$router->post("/salvarProprietario", function () {
    include __DIR__ . 'View/cadastro_proprietario.php';
});

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
