<?php

namespace Controllers\listaProprietarios;

use Model\Proprietarios;
use PDO;

class listaProprietarios {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listaProprietarios() {
        // Obter todos os proprietários usando o método estático all() da classe proprietarios
        $proprietariosModel = new Proprietarios($this->pdo);
        $proprietarios = $proprietariosModel->all();


        renderView('listaProprietarios.php', ['proprietarios' => $proprietarios]);
    }
}