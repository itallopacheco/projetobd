<?php

namespace Itallo\Doctrine\Controller\ProdutoController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Categoria;
use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class VincularCategoria implements InterfaceControladorRequisicao
{
    public function __construct()
    {
        $this->entityManager = (new EntityManagerFactory())
            ->getEntityManager();

    }

    public function processaRequisicao(): void
    {

        $idCategoria = filter_input(
            INPUT_POST,
            'idCad',
            FILTER_VALIDATE_INT
        );

        $idProduto = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        /**
         * @var Categoria $categoria
         */
        $categoria = $this->entityManager->find(Categoria::class,$idCategoria);
        /**
         * @var Produto $produto
         */
        $produto = $this->entityManager->find(Produto::class,$idProduto);

        $produto->addCategoria($categoria);

        $this->entityManager->flush();

        header('Location: /listar-produtos', false,302);
    }


}