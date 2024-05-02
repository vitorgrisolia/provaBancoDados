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

$router->get("/cadastroProprietario","Controller\cadastro_proprietarios:salvarProprietario");
$router->post("/cadastroProprietario", "Controller\cadastro_proprietarios:salvarProprietario");

$router->get("/cadastroPets","Controller\cadastro_pets:salvarpets");
$router->post("/cadastroPet", "View\cadastro_pets:salvarpets");

$router->post("/salvarProprietario","View/cadastro_proprietario.php");

$router->post("/salvarPet", "View/cadastro_pets.php");

// Execute as rotas
$router->dispatch();

// Redirecione todos os erros
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
?>
