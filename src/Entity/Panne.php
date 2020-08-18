<?php

namespace App\Entity;
use App\Repository\PanneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Panne
 *
 * @ORM\Table(name="panne", uniqueConstraints={@ORM\UniqueConstraint(name="PANNE_PK", columns={"IDPANNE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=PanneRepository::class)
 */
class Panne
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPANNE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanne;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLEPANNE", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $libellepanne;

    public function getIdpanne(): ?int
    {
        return $this->idpanne;
    }

    public function getLibellepanne(): ?string
    {
        return $this->libellepanne;
    }

    public function setLibellepanne(string $libellepanne): self
    {
        $this->libellepanne = $libellepanne;

        return $this;
    }


}
