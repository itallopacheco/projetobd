<?php

namespace Itallo\Doctrine\Repository;

use Doctrine\ORM\EntityRepository;
use Itallo\Doctrine\Entity\Produto;

class ProdutoRepository extends EntityRepository
{
    public function buscaCategoriaporProduto()
    {
        $query = $this->createQueryBuilder('p')
            ->join('p.categorias', 'c')
            ->addSelect('c')
            ->getQuery();

        return $query->getResult();

    }
}