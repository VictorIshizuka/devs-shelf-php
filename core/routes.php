<?php

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']); // pega a parte da URL depois do domínio e remove as barras

if (!$controller) $controller = 'index'; // se a URL for apenas o domínio, define o controller como 'index'

if ( ! file_exists("../controllers/{$controller}.controller.php")) { // se o arquivo do controller não existir, retorna um erro 404

    abort(404);

}

require "../controllers/{$controller}.controller.php";

