<?php

namespace Itallo\Doctrine\Controller\ProdutoController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class FormularioVincularCategoria implements InterfaceControladorRequisicao
{
    public function __construct()
    {
        $entityManager = (new EntityManagerFactory())
            ->getEntityManager();
        $this->repertorioProdutos = $entityManager
            ->getRepository(Produto::class);
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );


        $produto = $this->repertorioProdutos->find($id);
        $titulo = 'Vincular Categoria: ' . $produto->getNome() ;
        require __DIR__ . '/../../../view/produtos/formulario-adicionar-categoria.php';

    }
}