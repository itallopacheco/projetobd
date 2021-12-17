<?php

use Itallo\Doctrine\Controller\{AlterarCategoria,
    AlterarProduto,
    ExcluirCategoria,
    ExcluirProduto,
    FormularioCategoria,
    FormularioProduto,
    ListarCategorias,
    ListarProdutos,
    PersistenciaCategoria,
    PersistenciaProduto};

$rotas = [
    '/listar-produtos' => ListarProdutos::class,
    '/novo-produto' => FormularioProduto::class,
    '/salvar-produto' => PersistenciaProduto::class,
    '/excluir-produto' => ExcluirProduto::class,
    '/atualizar-produto' => AlterarProduto::class,
    '/listar-categorias' => ListarCategorias::class,
    '/nova-categoria' => FormularioCategoria::class,
    '/salvar-categoria' => PersistenciaCategoria::class,
    '/excluir-categoria' => ExcluirCategoria::class,
    '/atualizar-categoria' => AlterarCategoria::class
];

return $rotas;