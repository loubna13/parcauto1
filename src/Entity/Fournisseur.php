<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur", uniqueConstraints={@ORM\UniqueConstraint(name="FOURNISSEUR_PK", columns={"IDFOURNISSEUR"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFOURNISSEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMFOURNISSEUR", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $nomfournisseur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RSFOURNISSEUR", type="string", length=20, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $rsfournisseur = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="villefournisseur", type="string", length=20, nullable=false)
     */
    private $villefournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="telfournisseur", type="string", length=9, nullable=false, options={"fixed"=true})
     */
    private $telfournisseur;

    public function getIdfournisseur(): ?int
    {
        return $this->idfournisseur;
    }

    public function getNomfournisseur(): ?string
    {
        return $this->nomfournisseur;
    }

    public function setNomfournisseur(string $nomfournisseur): self
    {
        $this->nomfournisseur = $nomfournisseur;

        return $this;
    }

    public function getRsfournisseur(): ?string
    {
        return $this->rsfournisseur;
    }

    public function setRsfournisseur(?string $rsfournisseur): self
    {
        $this->rsfournisseur = $rsfournisseur;

        return $this;
    }

    public function getVillefournisseur(): ?string
    {
        return $this->villefournisseur;
    }

    public function setVillefournisseur(string $villefournisseur): self
    {
        $this->villefournisseur = $villefournisseur;

        return $this;
    }

    public function getTelfournisseur(): ?string
    {
        return $this->telfournisseur;
    }

    public function setTelfournisseur(string $telfournisseur): self
    {
        $this->telfournisseur = $telfournisseur;

        return $this;
    }


}
