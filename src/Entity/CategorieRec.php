<?php

namespace App\Entity;

use App\Repository\CategorieRecRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRecRepository::class)
 */
class CategorieRec
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="veuillez indiquer le nom")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="veuillez indiquer la description")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Reclamation::class, cascade={"persist", "remove"}, mappedBy="categorieRec")
     */
    private $reclamation;

    public function __construct()
    {
        $this->reclamation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

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

    /**
     * @return Collection|Reclamation[]
     */
    public function getReclamation(): Collection
    {
        return $this->reclamation;
    }

    public function addReclamation(Reclamation $reclamation): self
    {
        if (!$this->reclamation->contains($reclamation)) {
            $this->reclamation[] = $reclamation;
            $reclamation->setCategorieRec($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): self
    {
        if ($this->reclamation->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getCategorieRec() === $this) {
                $reclamation->setCategorieRec(null);
            }
        }

        return $this;
    }
}
