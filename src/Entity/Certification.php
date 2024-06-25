<?php

namespace App\Entity;

use App\Repository\CertificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificationRepository::class)]
class Certification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $point1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $point2 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $point3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPoint1(): ?string
    {
        return $this->point1;
    }

    public function setPoint1(string $point1): static
    {
        $this->point1 = $point1;

        return $this;
    }

    public function getPoint2(): ?string
    {
        return $this->point2;
    }

    public function setPoint2(string $point2): static
    {
        $this->point2 = $point2;

        return $this;
    }

    public function getPoint3(): ?string
    {
        return $this->point3;
    }

    public function setPoint3(?string $point3): static
    {
        $this->point3 = $point3;

        return $this;
    }
}
