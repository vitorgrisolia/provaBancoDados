<?php

namespace Controllers\listaProprietarios;

require_once 'config.php';

use Model\Proprietarios;
use PDO;
use PDOException;

class SalvarProprietario {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function salvarProprietario() {
        // Verifica se os dados do formulário foram enviados
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                // Prepara a query de inserção
                $stmt = $this->pdo->prepare("INSERT INTO proprietarios (nome, telefone, email) VALUES (:nome, :telefone, :email)");
                
                // Bind dos parâmetros
                $stmt->bindParam(':nome', $_POST['nome']);
                $stmt->bindParam(':telefone', $_POST['telefone']);
                $stmt->bindParam(':email', $_POST['email']);

                // Executa a query
                $stmt->execute();
                echo "Proprietário cadastrado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro ao cadastrar proprietário: " . $e->getMessage();
            }
        }
    }
}

$dsn = DATA_LAYER_CONFIG['driver'] . ':host=' . DATA_LAYER_CONFIG['host'] . ';port=' . DATA_LAYER_CONFIG['port'] . ';dbname=' . DATA_LAYER_CONFIG['dbname'];
$username = DATA_LAYER_CONFIG['username'];
$password = DATA_LAYER_CONFIG['passwd'];

$pdo = new PDO($dsn, $username, $password, DATA_LAYER_CONFIG['options']);

$controller = new SalvarProprietario($pdo);
$controller->salvarProprietario();
