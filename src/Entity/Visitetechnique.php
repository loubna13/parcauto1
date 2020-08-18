<?php

namespace App\Entity;
use App\Repository\VisitetechniqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Visitetechnique
 *
 * @ORM\Table(name="visitetechnique", uniqueConstraints={@ORM\UniqueConstraint(name="VISITETECHNIQUE_PK", columns={"IDVISITETECHNIQUE"})}, indexes={@ORM\Index(name="FAIRE_FK", columns={"IDVEHICULE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=VisitetechniqueRepository::class)
 */
class Visitetechnique
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDVISITETECHNIQUE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvisitetechnique;

    /**
     * @var int
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=false)
     */
    private $idvehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="OBERVATIONVT", type="string", length=40, nullable=false, options={"fixed"=true})
     */
    private $obervationvt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEVT", type="date", nullable=false)
     */
    private $datevt;

    public function getIdvisitetechnique(): ?int
    {
        return $this->idvisitetechnique;
    }

    public function getIdvehicule(): ?int
    {
        return $this->idvehicule;
    }

    public function setIdvehicule(int $idvehicule): self
    {
        $this->idvehicule = $idvehicule;

        return $this;
    }

    public function getObervationvt(): ?string
    {
        return $this->obervationvt;
    }

    public function setObervationvt(string $obervationvt): self
    {
        $this->obervationvt = $obervationvt;

        return $this;
    }

    public function getDatevt(): ?\DateTimeInterface
    {
        return $this->datevt;
    }

    public function setDatevt(\DateTimeInterface $datevt): self
    {
        $this->datevt = $datevt;

        return $this;
    }


}
