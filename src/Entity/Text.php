<?php

namespace App\Entity;

use App\Repository\TextRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TextRepository::class)]
class Text
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $homePageDescription = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $aboutDescription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHomePageDescription(): ?string
    {
        return $this->homePageDescription;
    }

    public function setHomePageDescription(string $homePageDescription): static
    {
        $this->homePageDescription = $homePageDescription;

        return $this;
    }

    public function getAboutDescription(): ?string
    {
        return $this->aboutDescription;
    }

    public function setAboutDescription(string $aboutDescription): static
    {
        $this->aboutDescription = $aboutDescription;

        return $this;
    }
}
