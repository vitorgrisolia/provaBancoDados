<?php

use CoffeeCode\DataLayer\DataLayer;
use PDO;

class proprietarios extends DataLayer
{

    public function __construct()
    {
        parent::__construct("proprietarios", ["id", "nome", "telefone", "email"], false);
    }

    /**
     * Método para buscar todos os registros da tabela proprietarios.
     * 
     * @return array Retorna um array com todos os registros da tabela proprietarios.
     */
    public function all(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM proprietarios");

        // Retorna todos os resultados como um array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
