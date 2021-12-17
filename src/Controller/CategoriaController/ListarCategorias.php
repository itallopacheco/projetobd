<?php

namespace Itallo\Doctrine\Controller\CategoriaController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Categoria;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class ListarCategorias implements InterfaceControladorRequisicao
{

    private $repositorioDeCategorias;
    public function __construct()
    {
        $entityManager = (new EntityManagerFactory())
            ->getEntityManager();
        $this->repositorioDeCategorias = $entityManager
            ->getRepository(Categoria::class);
    }

    public function processaRequisicao(): void
    {
        $categorias = $this->repositorioDeCategorias->findAll();
        $titulo = 'Lista de Categorias';
        require __DIR__ . '/../../../view/categorias/listar-categorias.php';
    }
}