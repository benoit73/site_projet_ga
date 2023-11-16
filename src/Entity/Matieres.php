<?php

namespace App\Entity;

use App\Repository\MatieresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatieresRepository::class)]
class Matieres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[ORM\Column(length: 255)]
    private ?string $nomMatiere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function getNomMatiere(): ?string
    {
        return $this->nomMatiere;
    }

    public function setNomMatiere(string $nomMatiere): static
    {
        $this->nomMatiere = $nomMatiere;

        return $this;
    }
}
