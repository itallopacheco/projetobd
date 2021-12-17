<?php

namespace Itallo\Doctrine\Controller\CategoriaController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Categoria;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class ExcluirCategoria implements InterfaceControladorRequisicao
{

    private \Doctrine\ORM\EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerFactory())->getEntityManager();

    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        //SE ID FOR NULO OU FALSO RETORNE PARA LISTAGEM DE CATEGORIAS
        if(is_null($id) ||$id===false){
            header('Location: /listar-categorias',false,302);
            return;
        }

        $categoria = $this->entityManager->getReference(Categoria::class, $id);
        $this->entityManager->remove($categoria);
        $this->entityManager->flush();
        header('Location: /listar-categorias',false,302);

    }


}