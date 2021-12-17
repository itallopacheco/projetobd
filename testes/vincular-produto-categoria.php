<?php

use Itallo\Doctrine\Entity\Categoria;
use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idProduto = $argv[1];
$idCategoria = $argv[2];
/**
@var Categoria $categoria
 */
$categoria = $entityManager->find(Categoria::class, $idCategoria);
/**
 * @var Produto $produto
 */
$produto = $entityManager->find(Produto::class,$idProduto);

$produto->addCategoria($categoria);

$entityManager->flush();