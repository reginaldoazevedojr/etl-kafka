<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoafisica
 *
 * @ORM\Table(name="PessoaFisica", uniqueConstraints={@ORM\UniqueConstraint(name="PessoaFisica_Cpf_uindex", columns={"Cpf"})}, indexes={@ORM\Index(name="IDX_91BDF8EEA0149D1A", columns={"PessoaID"})})
 * @ORM\Entity
 */
class Pessoafisica
{
    /**
     * @var int
     *
     * @ORM\Column(name="PessoaFisicaID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pessoaFisicaId;

    /**
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=1, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Cpf", type="string", length=11, nullable=false)
     */
    private $cpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Rg", type="string", length=1, nullable=true)
     */
    private $rg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CreatedAt", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="UpdatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PessoaID", referencedColumnName="PessoaID")
     * })
     */
    private $pessoaId;

    public function getPessoaFisicaId(): ?int
    {
        return $this->pessoaFisicaId;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getRg(): ?string
    {
        return $this->rg;
    }

    public function setRg(?string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getPessoaId(): ?Pessoa
    {
        return $this->pessoaId;
    }

    public function setPessoaId(?Pessoa $pessoaId): self
    {
        $this->pessoaId = $pessoaId;

        return $this;
    }


}
