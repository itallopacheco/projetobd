<?php

namespace Itallo\Doctrine\Controller\CategoriaController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Categoria;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class AlterarCategoria implements InterfaceControladorRequisicao
{

    private \Doctrine\Persistence\ObjectRepository|\Doctrine\ORM\EntityRepository $repositorioCategorias;

    public function __construct()
    {
        $entityManager = (new EntityManagerFactory())
            ->getEntityManager();
        $this->repositorioCategorias = $entityManager
            ->getRepository(Categoria::class);
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if(is_null($id) || $id === false){
            header('Location: /listar-categorias',false,302);
            return;
        }
        $categoria = $this->repositorioCategorias->find($id);
        $titulo = 'Alterar Categoria: ' . $categoria->getNome();
        require __DIR__ . '/../../../view/categorias/formulario-categorias.php';


    }
}