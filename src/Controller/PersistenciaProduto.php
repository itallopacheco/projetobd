<?php

namespace Itallo\Doctrine\Controller;

use Itallo\Doctrine\Entity\Produto;
use Itallo\Doctrine\Helper\EntityManagerFactory;

class PersistenciaProduto implements InterfaceControladorRequisicao
{

    private \Doctrine\ORM\EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerFactory())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        // pega os dados do form
        // monta modelo Produto
        // inserir no banco
        $nome = filter_input(
             INPUT_POST,
            'nome',
            FILTER_SANITIZE_STRING
        );
        $especializacao = filter_input(
            INPUT_POST,
            'nome',
            FILTER_SANITIZE_STRING
        );


         $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

            if(!is_null($id) && $id !== false){

                $produto = $this->entityManager->find(Produto::class, $id);
                $produto->setNome($nome);
                $produto->setEspecializacao($especializacao);
                $produto->setStatus($_POST['status']);

            } else{
                $produto = new Produto();
                $produto->setNome($nome);
                $produto->setEspecializacao($especializacao);
                $produto->setStatus($_POST['status']);

                $this->entityManager->persist($produto);
            }
        $this->entityManager->flush();
        header('Location: /listar-produtos', false,302);
    }
}