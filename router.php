<?php
// Inclua o autoload.php do Composer para carregar automaticamente as classes
require_once __DIR__ . '/vendor/autoload.php';

// Use o namespace da classe Router
use CoffeeCode\Router\Router;

// Crie uma instância do Router
$router = new Router("router");

// Configure as rotas e namespaces
$router->namespace("Test");

// Defina as rotas usando os métodos HTTP correspondentes
$router->get("/index", function () {
    include __DIR__ . 'provabancodados/index.html';
});
$router->post("/route/{id}", "Controller:method");
$router->put("/route/{id}/profile", "Controller:method");
$router->patch("/route/{id}/profile/{photo}", "Controller:method");
$router->delete("/route/{id}", "Controller:method");

// Agrupe rotas e namespaces
$router->group("admin")->namespace("Dash");
$router->get("/route", "Controller:method");
$router->post("/route/{id}", "Controller:method");

// Grupo de tratamento de erros
$router->group("error")->namespace("Test");
$router->get("/{errcode}", "Coffee:notFound");

// Execute as rotas
$router->dispatch();

// Redirecione todos os erros
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
