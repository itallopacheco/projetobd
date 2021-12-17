<?php

use Itallo\Doctrine\Entity\Categoria;
use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$categoria = new Categoria();
$categoria->setNome($argv[1]);

$entityManager->persist($categoria);
$entityManager->flush();