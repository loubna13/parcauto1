<?php

namespace App\Entity;
use App\Repository\SinistreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sinistre
 *
 * @ORM\Table(name="sinistre", uniqueConstraints={@ORM\UniqueConstraint(name="SINISTRE_PK", columns={"IDSINISTRE"})}, indexes={@ORM\Index(name="ETRERESPONSABLE_FK", columns={"IDINDIVIDU"}), @ORM\Index(name="AVOIR1_FK", columns={"IDVEHICULE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=SinistreRepository::class)
 */
class Sinistre
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDSINISTRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsinistre;

    /**
     * @var int
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=false)
     */
    private $idvehicule;

    /**
     * @var int
     *
     * @ORM\Column(name="IDINDIVIDU", type="integer", nullable=false)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEUSINISTRE", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $lieusinistre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATESINISTRE", type="date", nullable=false)
     */
    private $datesinistre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DEGATMATSINISTRE", type="string", length=100, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $degatmatsinistre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DEGATCORSINISTRE", type="string", length=100, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $degatcorsinistre = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBRDECESSINISTRE", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $nbrdecessinistre = 'NULL';

    public function getIdsinistre(): ?int
    {
        return $this->idsinistre;
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

    public function getIdindividu(): ?int
    {
        return $this->idindividu;
    }

    public function setIdindividu(int $idindividu): self
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    public function getLieusinistre(): ?string
    {
        return $this->lieusinistre;
    }

    public function setLieusinistre(string $lieusinistre): self
    {
        $this->lieusinistre = $lieusinistre;

        return $this;
    }

    public function getDatesinistre(): ?\DateTimeInterface
    {
        return $this->datesinistre;
    }

    public function setDatesinistre(\DateTimeInterface $datesinistre): self
    {
        $this->datesinistre = $datesinistre;

        return $this;
    }

    public function getDegatmatsinistre(): ?string
    {
        return $this->degatmatsinistre;
    }

    public function setDegatmatsinistre(?string $degatmatsinistre): self
    {
        $this->degatmatsinistre = $degatmatsinistre;

        return $this;
    }

    public function getDegatcorsinistre(): ?string
    {
        return $this->degatcorsinistre;
    }

    public function setDegatcorsinistre(?string $degatcorsinistre): self
    {
        $this->degatcorsinistre = $degatcorsinistre;

        return $this;
    }

    public function getNbrdecessinistre(): ?int
    {
        return $this->nbrdecessinistre;
    }

    public function setNbrdecessinistre(?int $nbrdecessinistre): self
    {
        $this->nbrdecessinistre = $nbrdecessinistre;

        return $this;
    }


}
