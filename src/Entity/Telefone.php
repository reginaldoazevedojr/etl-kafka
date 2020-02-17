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

    /**
     * @return int|null
     */
    public function getTelefoneId(): ?int
    {
        return $this->telefoneId;
    }

    /**
     * @return string|null
     */
    public function getDdd(): ?string
    {
        return $this->ddd;
    }

    /**
     * @param string $ddd
     * @return $this
     */
    public function setDdd(string $ddd): self
    {
        $this->ddd = $ddd;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return $this
     */
    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

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

    /**
     * @return Tipotelefone|null
     */
    public function getTipoTelefone(): ?Tipotelefone
    {
        return $this->tipoTelefone;
    }

    /**
     * @param Tipotelefone|null $tipoTelefone
     * @return $this
     */
    public function setTipoTelefone(?Tipotelefone $tipoTelefone): self
    {
        $this->tipoTelefone = $tipoTelefone;

        return $this;
    }


}
