<?php

namespace App\Entity;

use App\Repository\EdtRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EdtRepository::class)]
class Edt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   
    #[ORM\Column]
    private ?int $idClasse = null;

    #[ORM\Column(length: 255)]
    private ?string $enseignantClasse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function setIdClasse(int $idClasse): static
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    public function getEnseignantClasse(): ?string
    {
        return $this->enseignantClasse;
    }

    public function setEnseignantClasse(string $enseignantClasse): static
    {
        $this->enseignantClasse = $enseignantClasse;

        return $this;
    }
}
