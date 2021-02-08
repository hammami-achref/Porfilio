<?php

namespace App\Entity;

use App\Repository\CURSUSACADEMIQUERepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CURSUSACADEMIQUERepository::class)
 */
class CURSUSACADEMIQUE
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
    private $etablissement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="date")
     */
    public $Date_deb_formation;

    /**
     * @ORM\Column(type="date")
     */
    public $Date_fin_formation;

    /**
     * @ORM\OneToMany(targetEntity=NIVEAU::class, mappedBy="cURSUSACADEMIQUE")
     */
    private $niveau_formation;

    /**
     * @ORM\ManyToOne(targetEntity=NIVEAU::class, inversedBy="Niveau_Form")
     */
    private $nIVEAU;

    public function __construct()
    {
        $this->niveau_formation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(string $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDateeDebFormation(): ?\DateTimeInterface
    {
        return $this->Date_deb_formation;
    }

    public function setDateDebFormation(\DateTimeInterface $Date_deb_formation): self
    {
        $this->Date_deb_formation = $Date_deb_formation;

        return $this;
    }

    public function getDateFinFormation(): ?\DateTimeInterface
    {
        return $this->Date_fin_formation;
    }

    public function setDateFinFormation(\DateTimeInterface $Date_fin_formation): self
    {
        $this->Date_fin_formation = $Date_fin_formation;

        return $this;
    }

    /**
     * @return Collection|NIVEAU[]
     */
    public function getNiveauFormation(): Collection
    {
        return $this->niveau_formation;
    }

    public function addNiveauFormation(NIVEAU $niveauFormation): self
    {
        if (!$this->niveau_formation->contains($niveauFormation)) {
            $this->niveau_formation[] = $niveauFormation;
            $niveauFormation->setCURSUSACADEMIQUE($this);
        }

        return $this;
    }

    public function removeNiveauFormation(NIVEAU $niveauFormation): self
    {
        if ($this->niveau_formation->removeElement($niveauFormation)) {
            // set the owning side to null (unless already changed)
            if ($niveauFormation->getCURSUSACADEMIQUE() === $this) {
                $niveauFormation->setCURSUSACADEMIQUE(null);
            }
        }

        return $this;
    }

    public function getNIVEAU(): ?NIVEAU
    {
        return $this->nIVEAU;
    }

    public function setNIVEAU(?NIVEAU $nIVEAU): self
    {
        $this->nIVEAU = $nIVEAU;

        return $this;
    }
}
