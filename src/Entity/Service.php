<?php

namespace App\Entity;
use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service", uniqueConstraints={@ORM\UniqueConstraint(name="SERVICE_PK", columns={"IDSERVICE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDSERVICE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservice;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLESERVICE", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $libelleservice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CHEFSERVICE", type="string", length=20, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $chefservice = 'NULL';

    public function getIdservice(): ?int
    {
        return $this->idservice;
    }

    public function getLibelleservice(): ?string
    {
        return $this->libelleservice;
    }

    public function setLibelleservice(string $libelleservice): self
    {
        $this->libelleservice = $libelleservice;

        return $this;
    }

    public function getChefservice(): ?string
    {
        return $this->chefservice;
    }

    public function setChefservice(?string $chefservice): self
    {
        $this->chefservice = $chefservice;

        return $this;
    }


}
