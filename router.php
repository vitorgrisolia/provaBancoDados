<?php
// Inclua o autoload.php do Composer para carregar automaticamente as classes
require_once __DIR__ . '/vendor/autoload.php';

// Use o namespace da classe Router
use CoffeeCode\Router\Router;

// Crie uma instância do Router
$router = new Router("route");

// Configure as rotas e namespaces
$router->namespace("Test");

// Defina as rotas usando os métodos HTTP correspondentes
$router->get("/home", function () {
    include __DIR__ . 'index.php';
});
$router->get("/listaProprietarios", function () {
    include __DIR__ . 'controller/listaProprietarios.php';
});
$router->get("/listaPets", function () {
    include __DIR__ . 'controller/listaPets.php';
});

// Execute as rotas
$router->dispatch();

// Redirecione todos os erros
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
