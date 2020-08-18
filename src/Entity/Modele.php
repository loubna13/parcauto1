<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele", uniqueConstraints={@ORM\UniqueConstraint(name="MODELE_PK", columns={"IDMODELE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ModeleRepository::class)
 */
class Modele
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDMODELE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLEMODELE", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $libellemodele;

    public function getIdmodele(): ?int
    {
        return $this->idmodele;
    }

    public function getLibellemodele(): ?string
    {
        return $this->libellemodele;
    }

    public function setLibellemodele(string $libellemodele): self
    {
        $this->libellemodele = $libellemodele;

        return $this;
    }


}
