<?php

namespace Itallo\Doctrine\Controller;

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class ExcluirProduto implements InterfaceControladorRequisicao
{
    private \Doctrine\ORM\EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerFactory())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,
                        'id',
                        FILTER_VALIDATE_INT
        );

        if(is_null($id) || $id === false){
            header('Location: /listar-produtos',false,302);
            return;
        }

        $produto = $this->entityManager->getReference(
            Produto::class,
            $id
        );
        $this->entityManager->remove($produto);
        $this->entityManager->flush();
        header('Location: /listar-produtos',false,302);
    }
}