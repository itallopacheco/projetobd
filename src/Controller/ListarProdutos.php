<?php

namespace Itallo\Doctrine\Controller;

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class ListarProdutos implements InterfaceControladorRequisicao
{
    private \Doctrine\Persistence\ObjectRepository|\Doctrine\ORM\EntityRepository $repositorioDeProdutos;
    public function __construct()
    {
        $entityManager = (new EntityManagerFactory())
            ->getEntityManager();
        $this->repositorioDeProdutos = $entityManager
            ->getRepository(Produto::class);
    }

    public function processaRequisicao() : void
    {
        $produtos = $this->repositorioDeProdutos->findAll();
        $titulo="Lista de Produtos";
        require __DIR__ . '/../../view/produtos/listar-produtos.php';
    }
}