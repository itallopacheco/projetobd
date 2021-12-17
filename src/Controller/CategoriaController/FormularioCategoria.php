<?php

namespace Itallo\Doctrine\Controller\CategoriaController;

use Itallo\Doctrine\Controller\InterfaceControladorRequisicao;
use Itallo\Doctrine\Entity\Categoria;

class FormularioCategoria implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        $titulo="Nova Categoria";
        require __DIR__ . '/../../../view/categorias/formulario-categorias.php';
    }
}