<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typevehicule
 *
 * @ORM\Table(name="typevehicule", uniqueConstraints={@ORM\UniqueConstraint(name="TYPEVEHICULE_PK", columns={"IDTYPEVEHICULE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=TypevehiculeRepository::class)
 */
class Typevehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPEVEHICULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypevehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLETYPEVEHICULE", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $libelletypevehicule;

    public function getIdtypevehicule(): ?int
    {
        return $this->idtypevehicule;
    }

    public function getLibelletypevehicule(): ?string
    {
        return $this->libelletypevehicule;
    }

    public function setLibelletypevehicule(string $libelletypevehicule): self
    {
        $this->libelletypevehicule = $libelletypevehicule;

        return $this;
    }


}
