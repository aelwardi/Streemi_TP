<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    /**
     * @var Collection<int, CategoriesMedia>
     */
    #[ORM\OneToMany(targetEntity: CategoriesMedia::class, mappedBy: 'category')]
    private Collection $categoriesMedia;

    public function __construct()
    {
        $this->categoriesMedia = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection<int, CategoriesMedia>
     */
    public function getCategoriesMedia(): Collection
    {
        return $this->categoriesMedia;
    }

    public function addCategoriesMedium(CategoriesMedia $categoriesMedium): static
    {
        if (!$this->categoriesMedia->contains($categoriesMedium)) {
            $this->categoriesMedia->add($categoriesMedium);
            $categoriesMedium->setCategory($this);
        }

        return $this;
    }

    public function removeCategoriesMedium(CategoriesMedia $categoriesMedium): static
    {
        if ($this->categoriesMedia->removeElement($categoriesMedium)) {
            // set the owning side to null (unless already changed)
            if ($categoriesMedium->getCategory() === $this) {
                $categoriesMedium->setCategory(null);
            }
        }

        return $this;
    }
}
