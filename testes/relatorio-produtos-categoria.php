<?php

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$produtosRepository = $entityManager->getRepository(Produto::class);

/**
 * @var Produto[] $produtos
 */
$produtos = $produtosRepository->findAll();

foreach ($produtos as $produto) {
    echo "ID: {$produto->getId()}\n";
    echo "Nome: {$produto->getNome()}\n";
    echo "Especialização: {$produto->getEspecializacao()}\n";
    $categorias = $produto->getCategorias();

    foreach ($categorias as $categoria){
        echo "\tID: Categoria: {$categoria->getId()}\n";
        echo "\tNome: Categoria: {$categoria->getNome()}\n";
        echo "\n";
    }
    echo"\n";
}