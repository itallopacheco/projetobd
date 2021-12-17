<?php

require __DIR__ . '/../vendor/autoload.php';

use Itallo\Doctrine\Controller\FormularioProduto;
use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Controller\ListarProdutos;
use Itallo\Doctrine\Controller\PersistenciaProduto;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';


if(!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

$classeControladora = $rotas[$caminho];
/**
 * @var InterfaceControladorRequisicao $controlador
 */
$controlador = new $classeControladora();
$controlador->processaRequisicao();

