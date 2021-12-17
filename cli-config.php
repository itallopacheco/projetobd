<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Itallo\Doctrine\Helper\EntityManagerFactory;

//substitua com o arquivo para o bootstrap do projeto
require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new  EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);