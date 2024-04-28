<?php

namespace Model;

use CoffeeCode\DataLayer\DataLayer;
use PDO;

class Pets extends DataLayer
{

    public function __construct(PDO $pdo)
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("pets", ["id", "nome", "especie", "raca", "idade", "proprietario_id"], "id", true);
        $this->pdo = $pdo;
    }
    /**
     * Método para buscar todos os registros da tabela pets.
     * @return array
     */
    public function all(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
