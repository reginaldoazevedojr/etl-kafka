<?php

namespace App\EntityOld;

use Doctrine\ORM\Mapping as ORM;

/**
 * CiaAssociado
 *
 * @ORM\Table(name="CIA_Associado")
 * @ORM\Entity
 */
class CiaAssociado
{
    /**
     * @var int
     *
     * @ORM\Column(name="Ass_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $assId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ass_Age_ID", type="smallint", nullable=true)
     */
    private $assAgeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ass_Sit_ID", type="smallint", nullable=true)
     */
    private $assSitId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Ban_Codigo", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $assBanCodigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_CPF", type="string", length=11, nullable=true, options={"fixed"=true})
     */
    private $assCpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Nome", type="string", length=50, nullable=true)
     */
    private $assNome;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ass_Data_Inscricao", type="datetime", nullable=true)
     */
    private $assDataInscricao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Endereco_Res", type="string", length=40, nullable=true)
     */
    private $assEnderecoRes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Bairro_Res", type="string", length=20, nullable=true)
     */
    private $assBairroRes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Cidade_Res", type="string", length=20, nullable=true)
     */
    private $assCidadeRes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Cep_Res", type="string", length=8, nullable=true, options={"fixed"=true})
     */
    private $assCepRes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_UF_Res", type="string", length=2, nullable=true, options={"fixed"=true})
     */
    private $assUfRes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Endereco_Com", type="string", length=40, nullable=true)
     */
    private $assEnderecoCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Bairro_Com", type="string", length=20, nullable=true)
     */
    private $assBairroCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Cidade_Com", type="string", length=20, nullable=true)
     */
    private $assCidadeCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_UF_Com", type="string", length=2, nullable=true, options={"fixed"=true})
     */
    private $assUfCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Cep_Com", type="string", length=8, nullable=true, options={"fixed"=true})
     */
    private $assCepCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Telefone1_Res", type="string", length=11, nullable=true, options={"fixed"=true})
     */
    private $assTelefone1Res;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Telefone2_Res", type="string", length=11, nullable=true, options={"fixed"=true})
     */
    private $assTelefone2Res;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Celular_Res", type="string", length=11, nullable=true, options={"fixed"=true})
     */
    private $assCelularRes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Telefone1_Com", type="string", length=11, nullable=true, options={"fixed"=true})
     */
    private $assTelefone1Com;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Telefone2_Com", type="string", length=11, nullable=true, options={"fixed"=true})
     */
    private $assTelefone2Com;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Fax_Com", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $assFaxCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Email_Res", type="string", length=70, nullable=true)
     */
    private $assEmailRes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Email_Com", type="string", length=70, nullable=true)
     */
    private $assEmailCom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ass_Data_Nascimento", type="datetime", nullable=true)
     */
    private $assDataNascimento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Naturalidade", type="string", length=25, nullable=true)
     */
    private $assNaturalidade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Nacionalidade", type="string", length=20, nullable=true)
     */
    private $assNacionalidade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_RG", type="string", length=15, nullable=true)
     */
    private $assRg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_RG_Org_Emissor", type="string", length=15, nullable=true)
     */
    private $assRgOrgEmissor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Sexo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $assSexo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ass_Data_Homologacao", type="datetime", nullable=true)
     */
    private $assDataHomologacao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Agencia", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $assAgencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_Conta", type="string", length=15, nullable=true)
     */
    private $assConta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_CPF_Conjuge", type="string", length=11, nullable=true)
     */
    private $assCpfConjuge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_RG_Conjuge", type="string", length=15, nullable=true)
     */
    private $assRgConjuge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ass_RG_Org_Emissor_Conjuge", type="string", length=15, nullable=true)
     */
    private $assRgOrgEmissorConjuge;

    public function getAssId(): ?int
    {
        return $this->assId;
    }

    public function getAssAgeId(): ?int
    {
        return $this->assAgeId;
    }

    public function setAssAgeId(?int $assAgeId): self
    {
        $this->assAgeId = $assAgeId;

        return $this;
    }

    public function getAssSitId(): ?int
    {
        return $this->assSitId;
    }

    public function setAssSitId(?int $assSitId): self
    {
        $this->assSitId = $assSitId;

        return $this;
    }

    public function getAssBanCodigo(): ?string
    {
        return $this->assBanCodigo;
    }

    public function setAssBanCodigo(?string $assBanCodigo): self
    {
        $this->assBanCodigo = $assBanCodigo;

        return $this;
    }

    public function getAssCpf(): ?string
    {
        return $this->assCpf;
    }

    public function setAssCpf(?string $assCpf): self
    {
        $this->assCpf = $assCpf;

        return $this;
    }

    public function getAssNome(): ?string
    {
        return $this->assNome;
    }

    public function setAssNome(?string $assNome): self
    {
        $this->assNome = $assNome;

        return $this;
    }

    public function getAssDataInscricao(): ?\DateTimeInterface
    {
        return $this->assDataInscricao;
    }

    public function setAssDataInscricao(?\DateTimeInterface $assDataInscricao): self
    {
        $this->assDataInscricao = $assDataInscricao;

        return $this;
    }

    public function getAssEnderecoRes(): ?string
    {
        return $this->assEnderecoRes;
    }

    public function setAssEnderecoRes(?string $assEnderecoRes): self
    {
        $this->assEnderecoRes = $assEnderecoRes;

        return $this;
    }

    public function getAssBairroRes(): ?string
    {
        return $this->assBairroRes;
    }

    public function setAssBairroRes(?string $assBairroRes): self
    {
        $this->assBairroRes = $assBairroRes;

        return $this;
    }

    public function getAssCidadeRes(): ?string
    {
        return $this->assCidadeRes;
    }

    public function setAssCidadeRes(?string $assCidadeRes): self
    {
        $this->assCidadeRes = $assCidadeRes;

        return $this;
    }

    public function getAssCepRes(): ?string
    {
        return $this->assCepRes;
    }

    public function setAssCepRes(?string $assCepRes): self
    {
        $this->assCepRes = $assCepRes;

        return $this;
    }

    public function getAssUfRes(): ?string
    {
        return $this->assUfRes;
    }

    public function setAssUfRes(?string $assUfRes): self
    {
        $this->assUfRes = $assUfRes;

        return $this;
    }

    public function getAssEnderecoCom(): ?string
    {
        return $this->assEnderecoCom;
    }

    public function setAssEnderecoCom(?string $assEnderecoCom): self
    {
        $this->assEnderecoCom = $assEnderecoCom;

        return $this;
    }

    public function getAssBairroCom(): ?string
    {
        return $this->assBairroCom;
    }

    public function setAssBairroCom(?string $assBairroCom): self
    {
        $this->assBairroCom = $assBairroCom;

        return $this;
    }

    public function getAssCidadeCom(): ?string
    {
        return $this->assCidadeCom;
    }

    public function setAssCidadeCom(?string $assCidadeCom): self
    {
        $this->assCidadeCom = $assCidadeCom;

        return $this;
    }

    public function getAssUfCom(): ?string
    {
        return $this->assUfCom;
    }

    public function setAssUfCom(?string $assUfCom): self
    {
        $this->assUfCom = $assUfCom;

        return $this;
    }

    public function getAssCepCom(): ?string
    {
        return $this->assCepCom;
    }

    public function setAssCepCom(?string $assCepCom): self
    {
        $this->assCepCom = $assCepCom;

        return $this;
    }

    public function getAssTelefone1Res(): ?string
    {
        return $this->assTelefone1Res;
    }

    public function setAssTelefone1Res(?string $assTelefone1Res): self
    {
        $this->assTelefone1Res = $assTelefone1Res;

        return $this;
    }

    public function getAssTelefone2Res(): ?string
    {
        return $this->assTelefone2Res;
    }

    public function setAssTelefone2Res(?string $assTelefone2Res): self
    {
        $this->assTelefone2Res = $assTelefone2Res;

        return $this;
    }

    public function getAssCelularRes(): ?string
    {
        return $this->assCelularRes;
    }

    public function setAssCelularRes(?string $assCelularRes): self
    {
        $this->assCelularRes = $assCelularRes;

        return $this;
    }

    public function getAssTelefone1Com(): ?string
    {
        return $this->assTelefone1Com;
    }

    public function setAssTelefone1Com(?string $assTelefone1Com): self
    {
        $this->assTelefone1Com = $assTelefone1Com;

        return $this;
    }

    public function getAssTelefone2Com(): ?string
    {
        return $this->assTelefone2Com;
    }

    public function setAssTelefone2Com(?string $assTelefone2Com): self
    {
        $this->assTelefone2Com = $assTelefone2Com;

        return $this;
    }

    public function getAssFaxCom(): ?string
    {
        return $this->assFaxCom;
    }

    public function setAssFaxCom(?string $assFaxCom): self
    {
        $this->assFaxCom = $assFaxCom;

        return $this;
    }

    public function getAssEmailRes(): ?string
    {
        return $this->assEmailRes;
    }

    public function setAssEmailRes(?string $assEmailRes): self
    {
        $this->assEmailRes = $assEmailRes;

        return $this;
    }

    public function getAssEmailCom(): ?string
    {
        return $this->assEmailCom;
    }

    public function setAssEmailCom(?string $assEmailCom): self
    {
        $this->assEmailCom = $assEmailCom;

        return $this;
    }

    public function getAssDataNascimento(): ?\DateTimeInterface
    {
        return $this->assDataNascimento;
    }

    public function setAssDataNascimento(?\DateTimeInterface $assDataNascimento): self
    {
        $this->assDataNascimento = $assDataNascimento;

        return $this;
    }

    public function getAssNaturalidade(): ?string
    {
        return $this->assNaturalidade;
    }

    public function setAssNaturalidade(?string $assNaturalidade): self
    {
        $this->assNaturalidade = $assNaturalidade;

        return $this;
    }

    public function getAssNacionalidade(): ?string
    {
        return $this->assNacionalidade;
    }

    public function setAssNacionalidade(?string $assNacionalidade): self
    {
        $this->assNacionalidade = $assNacionalidade;

        return $this;
    }

    public function getAssRg(): ?string
    {
        return $this->assRg;
    }

    public function setAssRg(?string $assRg): self
    {
        $this->assRg = $assRg;

        return $this;
    }

    public function getAssRgOrgEmissor(): ?string
    {
        return $this->assRgOrgEmissor;
    }

    public function setAssRgOrgEmissor(?string $assRgOrgEmissor): self
    {
        $this->assRgOrgEmissor = $assRgOrgEmissor;

        return $this;
    }

    public function getAssSexo(): ?string
    {
        return $this->assSexo;
    }

    public function setAssSexo(?string $assSexo): self
    {
        $this->assSexo = $assSexo;

        return $this;
    }

    public function getAssDataHomologacao(): ?\DateTimeInterface
    {
        return $this->assDataHomologacao;
    }

    public function setAssDataHomologacao(?\DateTimeInterface $assDataHomologacao): self
    {
        $this->assDataHomologacao = $assDataHomologacao;

        return $this;
    }

    public function getAssAgencia(): ?string
    {
        return $this->assAgencia;
    }

    public function setAssAgencia(?string $assAgencia): self
    {
        $this->assAgencia = $assAgencia;

        return $this;
    }

    public function getAssConta(): ?string
    {
        return $this->assConta;
    }

    public function setAssConta(?string $assConta): self
    {
        $this->assConta = $assConta;

        return $this;
    }

    public function getAssCpfConjuge(): ?string
    {
        return $this->assCpfConjuge;
    }

    public function setAssCpfConjuge(?string $assCpfConjuge): self
    {
        $this->assCpfConjuge = $assCpfConjuge;

        return $this;
    }

    public function getAssRgConjuge(): ?string
    {
        return $this->assRgConjuge;
    }

    public function setAssRgConjuge(?string $assRgConjuge): self
    {
        $this->assRgConjuge = $assRgConjuge;

        return $this;
    }

    public function getAssRgOrgEmissorConjuge(): ?string
    {
        return $this->assRgOrgEmissorConjuge;
    }

    public function setAssRgOrgEmissorConjuge(?string $assRgOrgEmissorConjuge): self
    {
        $this->assRgOrgEmissorConjuge = $assRgOrgEmissorConjuge;

        return $this;
    }


}
