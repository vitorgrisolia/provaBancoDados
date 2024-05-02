<?php

namespace components\methods;

use PDO;

class ViewRenderer
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function renderView(string $view, array $data = []): string
    {
        $viewFile = __DIR__ . "/../views/{$view}.php";

        if (!file_exists($viewFile)) {
            throw new \InvalidArgumentException("View file '{$view}.php' not found.");
        }

        // Extrai os dados para que sejam acessíveis na view
        extract($data);

        // Inicia o buffer de saída
        ob_start();

        // Inclui o arquivo da view
        require $viewFile;

        // Retorna o conteúdo do buffer de saída
        return ob_get_clean();
    }
}
