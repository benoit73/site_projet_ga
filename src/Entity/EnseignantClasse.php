<?php

namespace App\Entity;

use App\Repository\EnseignantClasseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnseignantClasseRepository::class)]
class EnseignantClasse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   

    #[ORM\Column]
    private ?int $idEnseignant = null;

    #[ORM\Column]
    private ?int $idClasse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function getIdEnseignant(): ?int
    {
        return $this->idEnseignant;
    }

    public function setIdEnseignant(int $idEnseignant): static
    {
        $this->idEnseignant = $idEnseignant;

        return $this;
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
}
