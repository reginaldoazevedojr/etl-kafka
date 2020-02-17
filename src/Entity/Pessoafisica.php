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

    /**
     * @return int|null
     */
    public function getPessoaFisicaId(): ?int
    {
        return $this->pessoaFisicaId;
    }

    /**
     * @return string|null
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return $this
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     * @return $this
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRg(): ?string
    {
        return $this->rg;
    }

    /**
     * @param string|null $rg
     * @return $this
     */
    public function setRg(?string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface|null $createdAt
     * @return $this
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Pessoa|null
     */
    public function getPessoaId(): ?Pessoa
    {
        return $this->pessoaId;
    }

    /**
     * @param Pessoa|null $pessoaId
     * @return $this
     */
    public function setPessoaId(?Pessoa $pessoaId): self
    {
        $this->pessoaId = $pessoaId;

        return $this;
    }


}
