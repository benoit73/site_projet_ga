<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column]
    private ?int $idEdt = null;

    #[ORM\Column]
    private ?int $idEnseignant = null;

    #[ORM\Column]
    private ?int $idMatiere = null;

    #[ORM\Column]
    private ?int $duree = null;

    #[ORM\Column]
    private ?int $debut = null;

    #[ORM\Column(length: 255)]
    private ?string $jour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getIdEdt(): ?int
    {
        return $this->idEdt;
    }

    public function setIdEdt(int $idEdt): static
    {
        $this->idEdt = $idEdt;

        return $this;
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

    public function getIdMatiere(): ?int
    {
        return $this->idMatiere;
    }

    public function setIdMatiere(int $idMatiere): static
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDebut(): ?int
    {
        return $this->debut;
    }

    public function setDebut(int $debut): static
    {
        $this->debut = $debut;

        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;

        return $this;
    }
}
