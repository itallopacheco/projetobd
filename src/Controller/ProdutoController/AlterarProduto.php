<?php

namespace Itallo\Doctrine\Controller\ProdutoController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class AlterarProduto implements InterfaceControladorRequisicao
{

    public function __construct()
    {
        $entityManager = (new EntityManagerFactory())
            ->getEntityManager();
        $this->repositorioProdutos = $entityManager
            ->getRepository(Produto::class);
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if(is_null($id) || $id === false){
            header('Location: /listar-produtos',false,302);
            return;
        }

        $produto = $this->repositorioProdutos->find($id);
        $titulo = 'Alterar Produto: ' . $produto->getNome();
        require __DIR__ .'/../../../view/produtos/formulario-produtos.php';


    }
}