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
    include __DIR__ . '/controller/listaProprietarios.php';
});
$router->get("/listaPets", function () {
    include __DIR__ . '/controller/listaPets.php';
});

// Execute as rotas
$router->dispatch();

// Redirecione todos os erros
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
