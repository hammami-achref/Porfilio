<?php

namespace App\Entity;

use App\Repository\EXPERIENCERepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EXPERIENCERepository::class)
 */
class EXPERIENCE
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $employeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $ville_exp;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_deb_experience;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_fin_experience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getEmployeur(): ?string
    {
        return $this->employeur;
    }

    public function setEmployeur(string $employeur): self
    {
        $this->employeur = $employeur;

        return $this;
    }

    public function getVilleExp(): ?string
    {
        return $this->ville_exp;
    }

    public function setVilleExp(string $ville_exp): self
    {
        $this->ville_exp = $ville_exp;

        return $this;
    }

    public function getDateDebExperience(): ?\DateTimeInterface
    {
        return $this->Date_deb_experience;
    }

    public function setDateDebExperience(\DateTimeInterface $Date_deb_experience): self
    {
        $this->Date_deb_experience = $Date_deb_experience;

        return $this;
    }

    public function getDateFinExperience(): ?\DateTimeInterface
    {
        return $this->Date_fin_experience;
    }

    public function setDateFinExperience(\DateTimeInterface $Date_fin_experience): self
    {
        $this->Date_fin_experience = $Date_fin_experience;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
