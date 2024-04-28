<?php

use CoffeeCode\DataLayer\DataLayer;

class Pets extends DataLayer
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("pets", ["id", "nome", "especie", "raca", "idade", "proprietario_id"]);
    }

    /**
     * Método para buscar todos os registros da tabela proprietarios.
     * 
     * @return array Retorna um array com todos os registros da tabela proprietarios.
     */
    public function all(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM pets");

        // Retorna todos os resultados como um array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}