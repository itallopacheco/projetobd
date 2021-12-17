<?php

use Itallo\Doctrine\Controller\{CategoriaController\AlterarCategoria,
    CategoriaController\ExcluirCategoria,
    CategoriaController\FormularioCategoria,
    CategoriaController\ListarCategorias,
    CategoriaController\PersistenciaCategoria,
    ListarTudo,
    ProdutoController\FormularioVincularCategoria,
    ProdutoController\AlterarProduto,
    ProdutoController\ExcluirProduto,
    ProdutoController\FormularioProduto,
    ProdutoController\ListarProdutos,
    ProdutoController\PersistenciaProduto,
    ProdutoController\VincularCategoria};

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
    '/atualizar-categoria' => AlterarCategoria::class,
    '/adicionar-categoria' => FormularioVincularCategoria::class,
    '/vincular-categoria' => VincularCategoria::class,
    '/listar-todos'  => ListarTudo::class
];

return $rotas;