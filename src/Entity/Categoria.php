<?php

namespace Itallo\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Categoria
{
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private $id;

    /**
     * @param mixed $id
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @Column (type="string",nullable=false)
     */
    private $nome;
    /**
     * @ManyToMany(targetEntity="Produto", inversedBy="categorias")
     */
    private $produtos;

    public function __construct()
    {
        $this->produtos = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId() :int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome():string
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function addProduto(Produto $produto)
    {
        if ($this->produtos->contains($produto)){
            return $this;
        }

        $this->produtos->add($produto);
        $produto->addCategoria($this);

        return $this;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

}