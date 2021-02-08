<?php

namespace App\Entity;

use App\Repository\NIVEAURepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NIVEAURepository::class)
 */
class NIVEAU
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
    private $niveau_d_etude;

    /**
     * @ORM\ManyToOne(targetEntity=CURSUSACADEMIQUE::class, inversedBy="niveau_formation")
     */
    private $cURSUSACADEMIQUE;

    /**
     * @ORM\OneToMany(targetEntity=CURSUSACADEMIQUE::class, mappedBy="nIVEAU")
     */
    private $Niveau_Form;

    public function __construct()
    {
        $this->Niveau_Form = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveauDEtude(): ?string
    {
        return $this->niveau_d_etude;
    }

    public function setNiveauDEtude(string $niveau_d_etude): self
    {
        $this->niveau_d_etude = $niveau_d_etude;

        return $this;
    }

    public function getCURSUSACADEMIQUE(): ?CURSUSACADEMIQUE
    {
        return $this->cURSUSACADEMIQUE;
    }

    public function setCURSUSACADEMIQUE(?CURSUSACADEMIQUE $cURSUSACADEMIQUE): self
    {
        $this->cURSUSACADEMIQUE = $cURSUSACADEMIQUE;

        return $this;
    }

    /**
     * @return Collection|CURSUSACADEMIQUE[]
     */
    public function getNiveauForm(): Collection
    {
        return $this->Niveau_Form;
    }

    public function addNiveauForm(CURSUSACADEMIQUE $niveauForm): self
    {
        if (!$this->Niveau_Form->contains($niveauForm)) {
            $this->Niveau_Form[] = $niveauForm;
            $niveauForm->setNIVEAU($this);
        }

        return $this;
    }

    public function removeNiveauForm(CURSUSACADEMIQUE $niveauForm): self
    {
        if ($this->Niveau_Form->removeElement($niveauForm)) {
            // set the owning side to null (unless already changed)
            if ($niveauForm->getNIVEAU() === $this) {
                $niveauForm->setNIVEAU(null);
            }
        }

        return $this;
    }
}
