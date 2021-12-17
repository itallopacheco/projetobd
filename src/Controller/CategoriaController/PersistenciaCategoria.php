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
            'nome',
            FILTER_SANITIZE_STRING
        );

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if(!is_null($id) && $id !==false){
            $categoria = $this->entityManager->find(Categoria::class, $id);
            $categoria->setNome($nome);
        }else{
            $categoria = new Categoria();
            $this->entityManager->persist($categoria);
        }
        $this->entityManager->flush();

        header('Location: /listar-categorias', false, 302);
    }
}