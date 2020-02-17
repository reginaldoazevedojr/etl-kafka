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

    /**
     * @return int|null
     */
    public function getEnderecoId(): ?int
    {
        return $this->enderecoId;
    }

    /**
     * @return string|null
     */
    public function getLogradouroDescricao(): ?string
    {
        return $this->logradouroDescricao;
    }

    /**
     * @param string|null $logradouroDescricao
     * @return $this
     */
    public function setLogradouroDescricao(?string $logradouroDescricao): self
    {
        $this->logradouroDescricao = $logradouroDescricao;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumero(): ?int
    {
        return $this->numero;
    }

    /**
     * @param int|null $numero
     * @return $this
     */
    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCep(): ?string
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     * @return $this
     */
    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     * @return $this
     */
    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return $this
     */
    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     * @return $this
     */
    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

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
