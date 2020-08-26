<?php

namespace App\Entity;

class PropertySearch
{

   private $nom;
   private $prenom;
   private $immatriculationvehicule;

   
   public function getNom(): ?string
   {
       return $this->nom;
   }

   public function setNom(string $nom): self
   {
       $this->nom = $nom;

       return $this;
   }

   public function getPrenom(): ?string
   {
       return $this->prenom;
   }

   public function setPrenom(string $prenom): self
   {
       $this->prenom = $prenom;

       return $this;
   }
   public function getImmatriculationvehicule(): ?string
   {
       return $this->immatriculationvehicule;
   }

   public function setImmatriculationvehicule(string $immatriculationvehicule): self
   {
       $this->immatriculationvehicule= $immatriculationvehicule;

       return $this;
   }
}