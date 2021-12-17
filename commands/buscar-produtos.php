<?php

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$produtoRepository = $entityManager->getRepository(Produto::class);
/**
 * @var Produto[] $produtoList
 */
$produtoList = $produtoRepository->findAll();

foreach($produtoList as $produto){
    echo "ID: {$produto->getId()}\nNome: {$produto->getNome()}\nEspecializacao:{$produto->getEspecializacao()}\n
    Status:{$produto->getStatus()}\n";
}
/*
$pa = $produtoRepository->find(3);
echo $pa->getNome() . "\n";

$chave = $produtoRepository->findOneBy([
   'nome' => 'Chave Inglesa'
]);

var_dump($chave);
*/