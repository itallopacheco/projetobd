<?php

namespace Itallo\Doctrine\Controller\ProdutoController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;

class FormularioProduto implements InterfaceControladorRequisicao
{
    public function processaRequisicao() : void
    {
        $titulo="Novo Produto";
        require __DIR__ . '/../../../view/produtos/formulario-produtos.php';
    }
}