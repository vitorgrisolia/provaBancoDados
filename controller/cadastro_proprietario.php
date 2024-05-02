<?php

namespace Controllers\listaProprietarios;

require_once 'config.php';
require_once 'componentes\methods\renderView.php';

use Model\Proprietarios;
use PDO;
use PDOException;
use components\methods\ViewRenderer;

class SalvarProprietario {
    private $pdo;
    private $viewRenderer;

    public function __construct(PDO $pdo, ViewRenderer $viewRenderer) {
        $this->pdo = $pdo;
        $this->viewRenderer = $viewRenderer;
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

$viewRenderer = new ViewRenderer($arg1, $agr2);
$controller = new SalvarProprietario($pdo, $viewRenderer);
$controller->salvarProprietario();
