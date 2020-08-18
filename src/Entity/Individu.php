<?php

namespace App\Entity;
use App\Repository\IndividuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Individu
 *
 * @ORM\Table(name="individu", uniqueConstraints={@ORM\UniqueConstraint(name="INDIVIDU_PK", columns={"IDINDIVIDU"})}, indexes={@ORM\Index(name="CONDUIRE_FK", columns={"IDVEHICULE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=IndividuRepository::class)
 */
class Individu
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDINDIVIDU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idindividu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idvehicule = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMINDIVIDU", type="string", length=15, nullable=false, options={"fixed"=true})
     */
    private $nomindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOMINDIVIDU", type="string", length=15, nullable=false, options={"fixed"=true})
     */
    private $prenomindividu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELINDIVIDU", type="string", length=9, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $telindividu = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CININDIVIDU", type="string", length=10, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $cinindividu = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PATHPHOTOINDIVIDU", type="string", length=200, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $pathphotoindividu = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="INTERNE", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $interne = 'NULL';

    public function getIdindividu(): ?int
    {
        return $this->idindividu;
    }

    public function getIdvehicule(): ?int
    {
        return $this->idvehicule;
    }

    public function setIdvehicule(?int $idvehicule): self
    {
        $this->idvehicule = $idvehicule;

        return $this;
    }

    public function getNomindividu(): ?string
    {
        return $this->nomindividu;
    }

    public function setNomindividu(string $nomindividu): self
    {
        $this->nomindividu = $nomindividu;

        return $this;
    }

    public function getPrenomindividu(): ?string
    {
        return $this->prenomindividu;
    }

    public function setPrenomindividu(string $prenomindividu): self
    {
        $this->prenomindividu = $prenomindividu;

        return $this;
    }

    public function getTelindividu(): ?string
    {
        return $this->telindividu;
    }

    public function setTelindividu(?string $telindividu): self
    {
        $this->telindividu = $telindividu;

        return $this;
    }

    public function getCinindividu(): ?string
    {
        return $this->cinindividu;
    }

    public function setCinindividu(?string $cinindividu): self
    {
        $this->cinindividu = $cinindividu;

        return $this;
    }

    public function getPathphotoindividu(): ?string
    {
        return $this->pathphotoindividu;
    }

    public function setPathphotoindividu(?string $pathphotoindividu): self
    {
        $this->pathphotoindividu = $pathphotoindividu;

        return $this;
    }

    public function getInterne(): ?int
    {
        return $this->interne;
    }

    public function setInterne(?int $interne): self
    {
        $this->interne = $interne;

        return $this;
    }


}
