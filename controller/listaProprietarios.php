<?php

namespace Controllers\listaProprietarios;

use Model\Proprietarios;
use PDO;
use components\methods\ViewRenderer; 

class listaProprietarios {
    private $pdo;
    private $viewRenderer;

    public function __construct(PDO $pdo, ViewRenderer $viewRenderer) {
        $this->pdo = $pdo;
        $this->viewRenderer = $viewRenderer;
    }

    public function listaProprietarios() {
        // Obter todos os proprietários usando o método estático all() da classe proprietarios
        $proprietariosModel = new Proprietarios($this->pdo);
        $proprietarios = $proprietariosModel->all();

        // Renderizar a view e passar os dados
        return $this->viewRenderer->renderView('listaProprietarios', ['proprietarios' => $proprietarios]);
    }
}
