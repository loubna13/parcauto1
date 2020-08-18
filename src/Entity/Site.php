<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site", uniqueConstraints={@ORM\UniqueConstraint(name="SITE_PK", columns={"IDSITE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=SiteRepository::class)
 */
class Site
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDSITE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsite;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLACEMENTSITE", type="string", length=30, nullable=false, options={"fixed"=true})
     */
    private $emplacementsite;

    public function getIdsite(): ?int
    {
        return $this->idsite;
    }

    public function getEmplacementsite(): ?string
    {
        return $this->emplacementsite;
    }

    public function setEmplacementsite(string $emplacementsite): self
    {
        $this->emplacementsite = $emplacementsite;

        return $this;
    }


}
