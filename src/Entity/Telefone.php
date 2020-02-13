<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefone
 *
 * @ORM\Table(name="Telefone", indexes={@ORM\Index(name="IDX_D8448137A0149D1A", columns={"PessoaID"}), @ORM\Index(name="IDX_D8448137A7C49A12", columns={"TipoTelefone"})})
 * @ORM\Entity
 */
class Telefone
{
    /**
     * @var int
     *
     * @ORM\Column(name="TelefoneId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $telefoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="Ddd", type="string", length=3, nullable=false)
     */
    private $ddd;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=1, nullable=false)
     */
    private $numero;

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
     * @var \Tipotelefone
     *
     * @ORM\ManyToOne(targetEntity="Tipotelefone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoTelefone", referencedColumnName="TipoTelefoneID")
     * })
     */
    private $tipoTelefone;

    public function getTelefoneId(): ?int
    {
        return $this->telefoneId;
    }

    public function getDdd(): ?string
    {
        return $this->ddd;
    }

    public function setDdd(string $ddd): self
    {
        $this->ddd = $ddd;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

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

    public function getTipoTelefone(): ?Tipotelefone
    {
        return $this->tipoTelefone;
    }

    public function setTipoTelefone(?Tipotelefone $tipoTelefone): self
    {
        $this->tipoTelefone = $tipoTelefone;

        return $this;
    }


}
