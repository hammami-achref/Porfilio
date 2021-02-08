<?php

namespace App\Entity;

use App\Repository\LANGUESRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LANGUESRepository::class)
 */
class LANGUES
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
    private $langues;

    /**
     * @ORM\Column(type="integer")
     */
    public  $niveau_lan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangues(): ?string
    {
        return $this->langues;
    }

    public function setLangues(string $langues): self
    {
        $this->langues = $langues;

        return $this;
    }

    public function getNiveauLan(): ?int
    {
        return $this->niveau_lan;
    }

    public function setNiveauLan(int $niveau_lan): self
    {
        $this->niveau_lan = $niveau_lan;

        return $this;
    }
}
