<?php

namespace App\Entity;
use App\Repository\InterventionRepository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervention
 *
 * @ORM\Table(name="intervention", uniqueConstraints={@ORM\UniqueConstraint(name="INTERVENTION_PK", columns={"IDPANNE", "IDVEHICULE", "IDINDIVIDU", "DATEINTERVENTION"})}, indexes={@ORM\Index(name="INTERVENTION2_FK", columns={"IDVEHICULE"}), @ORM\Index(name="INTERVENTION3_FK", columns={"IDINDIVIDU"}), @ORM\Index(name="INTERVENTION_FK", columns={"IDPANNE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=InterventionRepository::class)
 */
class Intervention
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPANNE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpanne;

    /**
     * @var int
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idvehicule;

    /**
     * @var int
     *
     * @ORM\Column(name="IDINDIVIDU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idindividu;

    /**
     * @var int
     *
     * @ORM\Column(name="IDINTERVENTION", type="integer", nullable=false)
     */
    private $idintervention;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEPROBINTERVENTION", type="date", nullable=false)
     */
    private $dateprobintervention;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEINTERVENTION", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateintervention;

    /**
     * @var int
     *
     * @ORM\Column(name="DUREEINTERVENTION", type="smallint", nullable=false)
     */
    private $dureeintervention;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMPTERENDUINTERVENTION", type="string", length=200, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $compterenduintervention = 'NULL';

    public function getIdpanne(): ?int
    {
        return $this->idpanne;
    }

    public function getIdvehicule(): ?int
    {
        return $this->idvehicule;
    }

    public function getIdindividu(): ?int
    {
        return $this->idindividu;
    }

    public function getIdintervention(): ?int
    {
        return $this->idintervention;
    }

    public function setIdintervention(int $idintervention): self
    {
        $this->idintervention = $idintervention;

        return $this;
    }

    public function getDateprobintervention(): ?\DateTimeInterface
    {
        return $this->dateprobintervention;
    }

    public function setDateprobintervention(\DateTimeInterface $dateprobintervention): self
    {
        $this->dateprobintervention = $dateprobintervention;

        return $this;
    }

    public function getDateintervention(): ?\DateTimeInterface
    {
        return $this->dateintervention;
    }

    public function getDureeintervention(): ?int
    {
        return $this->dureeintervention;
    }

    public function setDureeintervention(int $dureeintervention): self
    {
        $this->dureeintervention = $dureeintervention;

        return $this;
    }

    public function getCompterenduintervention(): ?string
    {
        return $this->compterenduintervention;
    }

    public function setCompterenduintervention(?string $compterenduintervention): self
    {
        $this->compterenduintervention = $compterenduintervention;

        return $this;
    }


}
