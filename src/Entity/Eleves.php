<?php

namespace App\Entity;

use App\Repository\ElevesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElevesRepository::class)]
class Eleves
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomEleve = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomEleve = null;

    #[ORM\Column(length: 255)]
    private ?string $mailEleve = null;

    #[ORM\Column(nullable: true)]
    private ?int $idClasse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function getNomEleve(): ?string
    {
        return $this->nomEleve;
    }

    public function setNomEleve(string $nomEleve): static
    {
        $this->nomEleve = $nomEleve;

        return $this;
    }

    public function getPrenomEleve(): ?string
    {
        return $this->prenomEleve;
    }

    public function setPrenomEleve(string $prenomEleve): static
    {
        $this->prenomEleve = $prenomEleve;

        return $this;
    }

    public function getMailEleve(): ?string
    {
        return $this->mailEleve;
    }

    public function setMailEleve(string $mailEleve): static
    {
        $this->mailEleve = $mailEleve;

        return $this;
    }

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function setIdClasse(?int $idClasse): static
    {
        $this->idClasse = $idClasse;

        return $this;
    }
}
