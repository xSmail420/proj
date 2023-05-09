<?php

namespace App\Entity;

use App\Repository\CreateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CreateRepository::class)]
#[ORM\Table(name: '`create`')]
#[Broadcast]
class Create
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $mixed_vinyl = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMixedVinyl(): ?string
    {
        return $this->mixed_vinyl;
    }

    public function setMixedVinyl(?string $mixed_vinyl): self
    {
        $this->mixed_vinyl = $mixed_vinyl;

        return $this;
    }
}
