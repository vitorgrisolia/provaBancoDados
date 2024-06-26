<?php

namespace Controller\ListaPets; 

use Model\Pets; 
use PDO;
use components\methods\renderView;

class ListaPets
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listaPets()
    {
        // Obter todos os pets usando o método all() da classe Pets
        $petsModel = new Pets($this->pdo);
        $pets = $petsModel->all();

        renderView('listaPets.php', ['pets' => $pets]);
    }
}
