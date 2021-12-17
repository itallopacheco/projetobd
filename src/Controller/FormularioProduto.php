<?php

namespace Itallo\Doctrine\Controller;

class FormularioProduto implements InterfaceControladorRequisicao
{
    public function processaRequisicao() : void
    {
        $titulo="Novo Produto";
        require __DIR__ . '/../../view/produtos/formulario-produtos.php';
    }
}