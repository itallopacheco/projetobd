<?php

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$produto = new Produto ();
$produto->setNome($argv[1]);
$produto->setEspecializacao('abuble');
$produto->setStatus('venda');

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($produto);

$entityManager->flush();