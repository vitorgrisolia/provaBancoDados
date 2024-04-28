<?php

namespace Model;

use CoffeeCode\DataLayer\DataLayer;
use PDO;

class Proprietarios extends DataLayer
{
    public function __construct()
    {
        parent::__construct("proprietarios", ["id", "nome", "telefone", "email"], false);
    }
    /**
     * Método para buscar todos os registros da tabela proprietarios.
     * @return array
     */
    public function all(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM proprietarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
