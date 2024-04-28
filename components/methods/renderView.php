<?php

 // Método para renderizar a view com os dados
        function renderView($view, $data = []) 
    {
        if (file_exists($view)) {
            extract($data);
            include $view;
        } else {
            echo "View não encontrada.";
        }
    }