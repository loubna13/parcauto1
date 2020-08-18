<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule", uniqueConstraints={@ORM\UniqueConstraint(name="VEHICULE_PK", columns={"IDVEHICULE"})}, indexes={@ORM\Index(name="AFFECTER_FK", columns={"IDSERVICE"}), @ORM\Index(name="ACHETER_FK", columns={"IDFOURNISSEUR"}), @ORM\Index(name="APPARTENIR3_FK", columns={"IDTYPEVEHICULE"}), @ORM\Index(name="APPARTENIR2_FK", columns={"IDSITE"}), @ORM\Index(name="AVOIR_FK", columns={"IDTYPECARBURANT"}), @ORM\Index(name="APPARTENIR_FK", columns={"IDCATEGORIE"}), @ORM\Index(name="APPARTENIR4_FK", columns={"IDMODELE"}), @ORM\Index(name="ASSURER_FK", columns={"FOU_IDFOURNISSEUR"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvehicule;

    /**
     * @var int
     *
     * @ORM\Column(name="IDMODELE", type="integer", nullable=false)
     */
    private $idmodele;

    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPEVEHICULE", type="integer", nullable=false)
     */
    private $idtypevehicule;

    /**
     * @var int
     *
     * @ORM\Column(name="IDFOURNISSEUR", type="integer", nullable=false)
     */
    private $idfournisseur;

    /**
     * @var int
     *
     * @ORM\Column(name="IDSITE", type="integer", nullable=false)
     */
    private $idsite;

    /**
     * @var int
     *
     * @ORM\Column(name="IDCATEGORIE", type="integer", nullable=false)
     */
    private $idcategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPECARBURANT", type="integer", nullable=false)
     */
    private $idtypecarburant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDSERVICE", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idservice = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FOU_IDFOURNISSEUR", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $fouIdfournisseur = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBRPORTEVEHICULE", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $nbrportevehicule = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="PUISSANCEVEHICULE", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $puissancevehicule = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBRPLACEVEHICULE", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $nbrplacevehicule = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="CARTEGRISEVEHICULE", type="string", length=12, nullable=false, options={"fixed"=true})
     */
    private $cartegrisevehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="IMMATRICULATIONVEHICULE", type="string", length=12, nullable=false, options={"fixed"=true})
     */
    private $immatriculationvehicule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PATHPHOTOVEHICULE", type="string", length=255, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $pathphotovehicule = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEAQUISITIONVEHICULE", type="date", nullable=false)
     */
    private $dateaquisitionvehicule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUTASSURANCE", type="date", nullable=false)
     */
    private $datedebutassurance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFINASSURANCE", type="date", nullable=false)
     */
    private $datefinassurance;

    /**
     * @var float
     *
     * @ORM\Column(name="COUTASSURANCE", type="float", precision=10, scale=0, nullable=false)
     */
    private $coutassurance;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEDEBUTREPARATION", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datedebutreparation = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEFINREPARATION", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datefinreparation = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="COUTREPARATION", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $coutreparation = 'NULL';

    public function getIdvehicule(): ?int
    {
        return $this->idvehicule;
    }

    public function getIdmodele(): ?int
    {
        return $this->idmodele;
    }

    public function setIdmodele(int $idmodele): self
    {
        $this->idmodele = $idmodele;

        return $this;
    }

    public function getIdtypevehicule(): ?int
    {
        return $this->idtypevehicule;
    }

    public function setIdtypevehicule(int $idtypevehicule): self
    {
        $this->idtypevehicule = $idtypevehicule;

        return $this;
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

    public function getIdsite(): ?int
    {
        return $this->idsite;
    }

    public function setIdsite(int $idsite): self
    {
        $this->idsite = $idsite;

        return $this;
    }

    public function getIdcategorie(): ?int
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(int $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    public function getIdtypecarburant(): ?int
    {
        return $this->idtypecarburant;
    }

    public function setIdtypecarburant(int $idtypecarburant): self
    {
        $this->idtypecarburant = $idtypecarburant;

        return $this;
    }

    public function getIdservice(): ?int
    {
        return $this->idservice;
    }

    public function setIdservice(?int $idservice): self
    {
        $this->idservice = $idservice;

        return $this;
    }

    public function getFouIdfournisseur(): ?int
    {
        return $this->fouIdfournisseur;
    }

    public function setFouIdfournisseur(?int $fouIdfournisseur): self
    {
        $this->fouIdfournisseur = $fouIdfournisseur;

        return $this;
    }

    public function getNbrportevehicule(): ?int
    {
        return $this->nbrportevehicule;
    }

    public function setNbrportevehicule(?int $nbrportevehicule): self
    {
        $this->nbrportevehicule = $nbrportevehicule;

        return $this;
    }

    public function getPuissancevehicule(): ?int
    {
        return $this->puissancevehicule;
    }

    public function setPuissancevehicule(?int $puissancevehicule): self
    {
        $this->puissancevehicule = $puissancevehicule;

        return $this;
    }

    public function getNbrplacevehicule(): ?int
    {
        return $this->nbrplacevehicule;
    }

    public function setNbrplacevehicule(?int $nbrplacevehicule): self
    {
        $this->nbrplacevehicule = $nbrplacevehicule;

        return $this;
    }

    public function getCartegrisevehicule(): ?string
    {
        return $this->cartegrisevehicule;
    }

    public function setCartegrisevehicule(string $cartegrisevehicule): self
    {
        $this->cartegrisevehicule = $cartegrisevehicule;

        return $this;
    }

    public function getImmatriculationvehicule(): ?string
    {
        return $this->immatriculationvehicule;
    }

    public function setImmatriculationvehicule(string $immatriculationvehicule): self
    {
        $this->immatriculationvehicule = $immatriculationvehicule;

        return $this;
    }

    public function getPathphotovehicule(): ?string
    {
        return $this->pathphotovehicule;
    }

    public function setPathphotovehicule(?string $pathphotovehicule): self
    {
        $this->pathphotovehicule = $pathphotovehicule;

        return $this;
    }

    public function getDateaquisitionvehicule(): ?\DateTimeInterface
    {
        return $this->dateaquisitionvehicule;
    }

    public function setDateaquisitionvehicule(\DateTimeInterface $dateaquisitionvehicule): self
    {
        $this->dateaquisitionvehicule = $dateaquisitionvehicule;

        return $this;
    }

    public function getDatedebutassurance(): ?\DateTimeInterface
    {
        return $this->datedebutassurance;
    }

    public function setDatedebutassurance(\DateTimeInterface $datedebutassurance): self
    {
        $this->datedebutassurance = $datedebutassurance;

        return $this;
    }

    public function getDatefinassurance(): ?\DateTimeInterface
    {
        return $this->datefinassurance;
    }

    public function setDatefinassurance(\DateTimeInterface $datefinassurance): self
    {
        $this->datefinassurance = $datefinassurance;

        return $this;
    }

    public function getCoutassurance(): ?float
    {
        return $this->coutassurance;
    }

    public function setCoutassurance(float $coutassurance): self
    {
        $this->coutassurance = $coutassurance;

        return $this;
    }

    public function getDatedebutreparation(): ?\DateTimeInterface
    {
        return $this->datedebutreparation;
    }

    public function setDatedebutreparation(?\DateTimeInterface $datedebutreparation): self
    {
        $this->datedebutreparation = $datedebutreparation;

        return $this;
    }

    public function getDatefinreparation(): ?\DateTimeInterface
    {
        return $this->datefinreparation;
    }

    public function setDatefinreparation(?\DateTimeInterface $datefinreparation): self
    {
        $this->datefinreparation = $datefinreparation;

        return $this;
    }

    public function getCoutreparation(): ?float
    {
        return $this->coutreparation;
    }

    public function setCoutreparation(?float $coutreparation): self
    {
        $this->coutreparation = $coutreparation;

        return $this;
    }


}
