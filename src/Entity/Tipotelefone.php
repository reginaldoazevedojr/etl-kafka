<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipotelefone
 *
 * @ORM\Table(name="TipoTelefone")
 * @ORM\Entity
 */
class Tipotelefone
{
    /**
     * @var int
     *
     * @ORM\Column(name="TipoTelefoneID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipoTelefoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=1, nullable=false)
     */
    private $nome;

    /**
     * @return int|null
     */
    public function getTipoTelefoneId(): ?int
    {
        return $this->tipoTelefoneId;
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


}
