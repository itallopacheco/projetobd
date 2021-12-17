<?php

namespace Itallo\Doctrine\Controller\CategoriaController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Categoria;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class PersistenciaCategoria implements InterfaceControladorRequisicao
{

    private \Doctrine\ORM\EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerFactory())->getEntityManager();
    }


    public function processaRequisicao(): void
    {
        $nome = filter_input(
            INPUT_POST,
            'nome-categoria',
            FILTER_SANITIZE_STRING
        );
        $categoria = new Categoria();
        $categoria->setNome($nome);
        $this->entityManager->persist($categoria);
        $this->entityManager->flush();

        header('Location: /listar-categorias', false, 302);
    }
}