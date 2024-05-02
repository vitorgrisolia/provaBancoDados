<?php

namespace Controllers\listaProprietarios;

require_once 'config.php';
require_once 'components\methods\renderView.php';

use Model\Pets;
use PDO;
use PDOException;
use components\methods\ViewRenderer;

class SalvarPet {
    private $pdo;
    private $viewRenderer;

    public function __construct(PDO $pdo, ViewRenderer $viewRenderer) {
        $this->pdo = $pdo;
        $this->viewRenderer = $viewRenderer;
    }

    public function salvarPet() {
        // Verifica se os dados do formulário foram enviados
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                // Prepara a query de inserção
                $stmt = $this->pdo->prepare("INSERT INTO pets (nome, especie, raca, idade, proprietario_id) VALUES (:nome, :especie, :raca, :idade, :proprietario_id)");
                
                // Bind dos parâmetros
                $stmt->bindParam(':nome', $_POST['nome']);
                $stmt->bindParam(':especie', $_POST['especie']);
                $stmt->bindParam(':raca', $_POST['raca']);
                $stmt->bindParam(':idade', $_POST['idade']);
                $stmt->bindParam(':proprietario_id', $_POST['proprietario_id']);

                // Executa a query
                $stmt->execute();
                echo "Pet cadastrado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro ao cadastrar pet: " . $e->getMessage();
            }
        }
    }
}

$dsn = DATA_LAYER_CONFIG['driver'] . ':host=' . DATA_LAYER_CONFIG['host'] . ';port=' . DATA_LAYER_CONFIG['port'] . ';dbname=' . DATA_LAYER_CONFIG['dbname'];
$username = DATA_LAYER_CONFIG['username'];
$password = DATA_LAYER_CONFIG['passwd'];

$pdo = new PDO($dsn, $username, $password, DATA_LAYER_CONFIG['options']);

$viewRenderer = new ViewRenderer($arg1, $arg2); // Instancie o ViewRenderer conforme necessário
$controller = new SalvarPet($pdo, $viewRenderer);
$controller->salvarPet();
