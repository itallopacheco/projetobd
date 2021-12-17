<?php

namespace Itallo\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity(repositoryClass="Itallo\Doctrine\Repository\ProdutoRepository")
 */
class Produto
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column (type="string", nullable=false)
     */
    private $nome;
    /**
     * @Column (type="string",nullable=false)
     */
    private $especializacao;
    /**
     * @Column (type="string",nullable=false)
     */
    private $status;
    /**
     * @ManyToMany (targetEntity="Categoria",mappedBy="produtos")
     */
    private $categorias;

    public function __construct()
    {
        $this->categorias = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome() : string
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

    /**
     * @return mixed
     */
    public function getEspecializacao(): string
    {
        return $this->especializacao;
    }

    /**
     * @param mixed $especializacao
     */
    public function setEspecializacao(string $especializacao): self
    {
        $this->especializacao = $especializacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function addCategoria(Categoria $categoria){

        if ($this->categorias->contains($categoria)){
            return $this;
        }

        $this->categorias->add($categoria);
        $categoria->addProduto($this);

        return $this;
    }

    /**
     * @return Categoria[]
     */
    public function getCategorias(): Collection
    {
        return $this->categorias;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }


}