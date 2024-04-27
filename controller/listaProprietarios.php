<?php

namespace Controllers\listaPorprietarios;

use model\proprietarios;

use PDO;
class listaProprietarios {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listaPorprietarios() {
        // Aqui você poderia realizar qualquer lógica de negócios para obter dados do banco de dados
        // Por exemplo, buscar usuários do banco de dados
        $stmt = $this->pdo->query("SELECT * FROM users");
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Passa os dados para a view
        include 'listaPorprietarios.php';
    }
}
