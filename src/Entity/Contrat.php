<?php

namespace App\Entity;
use App\Repository\ContratRepository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", uniqueConstraints={@ORM\UniqueConstraint(name="CONTRAT_PK", columns={"IDCONTRAT"})}, indexes={@ORM\Index(name="APPARTENIR1_FK", columns={"IDTYPECONTRAT"}), @ORM\Index(name="CONCERNER_FK", columns={"IDVEHICULE"}), @ORM\Index(name="SIGNER_FK", columns={"IDFOURNISSEUR"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ContratRepository::class)
 */
class Contrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCONTRAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontrat;

    /**
     * @var int
     *
     * @ORM\Column(name="IDFOURNISSEUR", type="integer", nullable=false)
     */
    private $idfournisseur;

    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPECONTRAT", type="integer", nullable=false)
     */
    private $idtypecontrat;

    /**
     * @var int
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=false)
     */
    private $idvehicule;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEDEBCONTRAT", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datedebcontrat = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEFINCONTRAT", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datefincontrat = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="MONTANTCONTRAT", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $montantcontrat = 'NULL';

    public function getIdcontrat(): ?int
    {
        return $this->idcontrat;
    }

    public function getIdfournisseur(): ?int
    {
        return $this->idfournisseur;
    }

    public function setIdfournisseur(int $idfournisseur): self
    {
        $this->idfournisseur = $idfournisseur;

        return $this;
    }

    public function getIdtypecontrat(): ?int
    {
        return $this->idtypecontrat;
    }

    public function setIdtypecontrat(int $idtypecontrat): self
    {
        $this->idtypecontrat = $idtypecontrat;

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

    public function getDatedebcontrat(): ?\DateTimeInterface
    {
        return $this->datedebcontrat;
    }

    public function setDatedebcontrat(?\DateTimeInterface $datedebcontrat): self
    {
        $this->datedebcontrat = $datedebcontrat;

        return $this;
    }

    public function getDatefincontrat(): ?\DateTimeInterface
    {
        return $this->datefincontrat;
    }

    public function setDatefincontrat(?\DateTimeInterface $datefincontrat): self
    {
        $this->datefincontrat = $datefincontrat;

        return $this;
    }

    public function getMontantcontrat(): ?float
    {
        return $this->montantcontrat;
    }

    public function setMontantcontrat(?float $montantcontrat): self
    {
        $this->montantcontrat = $montantcontrat;

        return $this;
    }


}
