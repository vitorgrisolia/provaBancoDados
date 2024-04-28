<?php

namespace Controllers\listaPets;

use model\pets;

use PDO;

class listaPets {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listaPets() {
        // Obter todos os proprietários usando o método estático all() da classe pets
        $petsModel = new \Pets($this->pdo);
        $pets = $petsModel->all();

        // Passa os dados para a view
        include 'listaPets.php';
    }
}