<?php

namespace App\Entity;

use App\Repository\COMPETENCERepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=COMPETENCERepository::class)
 */
class COMPETENCE
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
    private $competences;

    /**
     * @ORM\Column(type="integer")
     */
    public $niveau_com;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompetences(): ?string
    {
        return $this->competences;
    }

    public function setCompetences(string $competences): self
    {
        $this->competences = $competences;

        return $this;
    }

    public function getNiveauCom(): ?int
    {
        return $this->niveau_com;
    }

    public function setNiveauCom(int $niveau_com): self
    {
        $this->niveau_com = $niveau_com;

        return $this;
    }
}
