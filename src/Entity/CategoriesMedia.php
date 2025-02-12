<?php

namespace App\Entity;

use App\Repository\CategoriesMediaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesMediaRepository::class)]
class CategoriesMedia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'categoriesMedia')]
    private ?Media $media = null;

    #[ORM\ManyToOne(inversedBy: 'categoriesMedia')]
    private ?Categorie $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMedia(): ?Media
    {
        return $this->media;
    }

    public function setMedia(?Media $media): static
    {
        $this->media = $media;

        return $this;
    }

    public function getCategory(): ?Categorie
    {
        return $this->category;
    }

    public function setCategory(?Categorie $category): static
    {
        $this->category = $category;

        return $this;
    }
}
