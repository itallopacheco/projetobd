<?php

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$produtoRepository = $entityManager->getRepository(Produto::class);



$id = $argv[1];
$novoNome = $argv[2];

$produto = $entityManager->find(Produto::class,$id);
$produto->setNome($novoNome);

$entityManager->flush();