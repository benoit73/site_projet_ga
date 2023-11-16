<?php

namespace App\Entity;

use App\Repository\EnseignantsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnseignantsRepository::class)]
class Enseignants
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   

    #[ORM\Column(length: 255)]
    private ?string $nomEnseignant = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomEnseignant = null;

    #[ORM\Column]
    private ?int $idMatiere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getNomEnseignant(): ?string
    {
        return $this->nomEnseignant;
    }

    public function setNomEnseignant(string $nomEnseignant): static
    {
        $this->nomEnseignant = $nomEnseignant;

        return $this;
    }

    public function getPrenomEnseignant(): ?string
    {
        return $this->prenomEnseignant;
    }

    public function setPrenomEnseignant(string $prenomEnseignant): static
    {
        $this->prenomEnseignant = $prenomEnseignant;

        return $this;
    }

    public function getIdMatiere(): ?int
    {
        return $this->idMatiere;
    }

    public function setIdMatiere(int $idMatiere): static
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }
}
