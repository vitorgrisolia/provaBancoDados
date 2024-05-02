<?php

namespace Controller\ListaPets;

use Model\Pets;
use PDO;
use components\methods\ViewRenderer;

class ListaPets
{
    private $pdo;
    private $viewRenderer;

    public function __construct(PDO $pdo, ViewRenderer $viewRenderer)
    {
        $this->pdo = $pdo;
        $this->viewRenderer = $viewRenderer;
    }

    public function listaPets()
    {
        // Obter todos os pets usando o método all() da classe Pets
        $petsModel = new Pets($this->pdo);
        $pets = $petsModel->all();

        // Renderizar a view e passar os dados
        return $this->viewRenderer->renderView('listaPets', ['pets' => $pets]);
    }
}
