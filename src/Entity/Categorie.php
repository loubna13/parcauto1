<?php

namespace App\Entity;
use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="categorie", uniqueConstraints={@ORM\UniqueConstraint(name="CATEGORIE_PK", columns={"IDCATEGORIE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */

class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCATEGORIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLECATEGORIE", type="string", length=15, nullable=false, options={"fixed"=true})
     */
    private $libellecategorie;

    public function getIdcategorie(): ?int
    {
        return $this->idcategorie;
    }

    public function getLibellecategorie(): ?string
    {
        return $this->libellecategorie;
    }

    public function setLibellecategorie(string $libellecategorie): self
    {
        $this->libellecategorie = $libellecategorie;

        return $this;
    }


}
