<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 *
 * @ORM\Table(name="Endereco", indexes={@ORM\Index(name="IDX_196B458A0149D1A", columns={"PessoaID"})})
 * @ORM\Entity
 */
class Endereco
{
    /**
     * @var int
     *
     * @ORM\Column(name="EnderecoID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $enderecoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LogradouroDescricao", type="string", length=500, nullable=true)
     */
    private $logradouroDescricao;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="Cep", type="string", length=8, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="Cidade", type="string", length=1, nullable=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="Bairro", type="string", length=1, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=2, nullable=false)
     */
    private $estado;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PessoaID", referencedColumnName="PessoaID")
     * })
     */
    private $pessoaId;

    public function getEnderecoId(): ?int
    {
        return $this->enderecoId;
    }

    public function getLogradouroDescricao(): ?string
    {
        return $this->logradouroDescricao;
    }

    public function setLogradouroDescricao(?string $logradouroDescricao): self
    {
        $this->logradouroDescricao = $logradouroDescricao;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

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
