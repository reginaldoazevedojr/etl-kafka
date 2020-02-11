<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssociadoRepository")
 */
class Associado
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataHomologacao;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexo;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDataHomologacao(): ?\DateTimeInterface
    {
        return $this->dataHomologacao;
    }

    public function setDataHomologacao(?\DateTimeInterface $dataHomologacao): self
    {
        $this->dataHomologacao = $dataHomologacao;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }
}
