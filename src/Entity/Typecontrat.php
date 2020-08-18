<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecontrat
 *
 * @ORM\Table(name="typecontrat", uniqueConstraints={@ORM\UniqueConstraint(name="TYPECONTRAT_PK", columns={"IDTYPECONTRAT"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=TypecontratRepository::class)
 */
class Typecontrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPECONTRAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLETYPECONTRAT", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $libelletypecontrat;

    public function getIdtypecontrat(): ?int
    {
        return $this->idtypecontrat;
    }

    public function getLibelletypecontrat(): ?string
    {
        return $this->libelletypecontrat;
    }

    public function setLibelletypecontrat(string $libelletypecontrat): self
    {
        $this->libelletypecontrat = $libelletypecontrat;

        return $this;
    }


}
