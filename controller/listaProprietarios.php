<?php

namespace Controllers\listaProprietarios;

use model\proprietarios;

use PDO;

class listaProprietarios {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listaProprietarios() {
        // Obter todos os proprietários usando o método estático all() da classe proprietarios
        $proprietariosModel = new \proprietarios($this->pdo);
        $proprietarios = $proprietariosModel->all();

        // Passa os dados para a view
        include 'listaProprietarios.php';
    }
}