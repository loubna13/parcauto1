<?php

namespace App\Entity;
use App\Repository\MissionRepository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission", uniqueConstraints={@ORM\UniqueConstraint(name="MISSION_PK", columns={"IDMISSION"})}, indexes={@ORM\Index(name="RESERVER_FK", columns={"IDVEHICULE"}), @ORM\Index(name="DEMANDER_FK", columns={"IDINDIVIDU"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=MissionRepository::class)
 */
class Mission
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDMISSION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmission;

    /**
     * @var int
     *
     * @ORM\Column(name="IDINDIVIDU", type="integer", nullable=false)
     */
    private $idindividu;

    /**
     * @var int
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=false)
     */
    private $idvehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECTIFMISSION", type="string", length=100, nullable=false, options={"fixed"=true})
     */
    private $objectifmission;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMPARCOURUMISSION", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $kmparcourumission = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="QTECARBURANTMISSION", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $qtecarburantmission = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATERESERVATION", type="date", nullable=false)
     */
    private $datereservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFINRESERVATION", type="date", nullable=false)
     */
    private $datefinreservation;

    public function getIdmission(): ?int
    {
        return $this->idmission;
    }

    public function getIdindividu(): ?int
    {
        return $this->idindividu;
    }

    public function setIdindividu(int $idindividu): self
    {
        $this->idindividu = $idindividu;

        return $this;
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

    public function getObjectifmission(): ?string
    {
        return $this->objectifmission;
    }

    public function setObjectifmission(string $objectifmission): self
    {
        $this->objectifmission = $objectifmission;

        return $this;
    }

    public function getKmparcourumission(): ?int
    {
        return $this->kmparcourumission;
    }

    public function setKmparcourumission(?int $kmparcourumission): self
    {
        $this->kmparcourumission = $kmparcourumission;

        return $this;
    }

    public function getQtecarburantmission(): ?int
    {
        return $this->qtecarburantmission;
    }

    public function setQtecarburantmission(?int $qtecarburantmission): self
    {
        $this->qtecarburantmission = $qtecarburantmission;

        return $this;
    }

    public function getDatereservation(): ?\DateTimeInterface
    {
        return $this->datereservation;
    }

    public function setDatereservation(\DateTimeInterface $datereservation): self
    {
        $this->datereservation = $datereservation;

        return $this;
    }

    public function getDatefinreservation(): ?\DateTimeInterface
    {
        return $this->datefinreservation;
    }

    public function setDatefinreservation(\DateTimeInterface $datefinreservation): self
    {
        $this->datefinreservation = $datefinreservation;

        return $this;
    }


}
