<?php

namespace Itallo\Doctrine\Controller;

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class ListarTudo implements InterfaceControladorRequisicao
{

    public function __construct()
    {
        $entityManager = (new EntityManagerFactory())->getEntityManager();
        $this->produtoRepository = $entityManager->getRepository(Produto::class);
    }

    public function processaRequisicao(): void
    {
        /**
         * @var Produto[] $produtos
         */
        $produtos = $this->produtoRepository->findAll();
        $titulo = "Listar tudo";
        require __DIR__ . '/../../view/listar-tudo.php';

    }


}