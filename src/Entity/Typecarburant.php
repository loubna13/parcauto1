<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecarburant
 *
 * @ORM\Table(name="typecarburant", uniqueConstraints={@ORM\UniqueConstraint(name="TYPECARBURANT_PK", columns={"IDTYPECARBURANT"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=TypecarburantRepository::class)
 */
class Typecarburant
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPECARBURANT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypecarburant;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLETYPECARBURANT", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $libelletypecarburant;

    public function getIdtypecarburant(): ?int
    {
        return $this->idtypecarburant;
    }

    public function getLibelletypecarburant(): ?string
    {
        return $this->libelletypecarburant;
    }

    public function setLibelletypecarburant(string $libelletypecarburant): self
    {
        $this->libelletypecarburant = $libelletypecarburant;

        return $this;
    }


}
